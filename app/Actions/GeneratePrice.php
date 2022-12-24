<?php

namespace App\Actions;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Price;
use App\Models\Sku;
use App\Models\Spu;
use Lorisleiva\Actions\Concerns\AsAction;

class GeneratePrice
{
    use AsAction;

    public function handle(Spu $spu, array $prices)
    {

//        $prices = [
//            [
//                'arrtibute_id'         => 1,
//                'attribute_name'       => '空调台数',
//                'arrtibute_value_id'   => 1,
//                'arrtibute_value_name' => '1',
//                'price'                => 150,
//            ],
//        ];

        foreach ($prices as $price) {
            if (empty($price['arrtibute_id'])) {
                $attribute = Attribute::firstOrCreate([
                    'spu_id'     => $spu->id,
                    'company_id' => $spu->company_id,
                    'name'       => $price['attribute_name'] ?? '-',
                ]);
            } else {
                $attribute = Attribute::query()->where('spu_id', $spu->id)
                    ->firstOrFail();
            }

            if (empty($price['arrtibute_value_id'])) {
                $attribute_value = AttributeValue::firstOrCreate([
                    'attribute_id' => $attribute->id,
                    'value'        => $price['arrtibute_value_name'],
                    'spu_id'       => $spu->id,
                    'company_id'   => $spu->company_id,
                ]);
            } else {
                $attribute_value = AttributeValue::where('attribute_id', $attribute->id)
                    ->findOrFail($price['arrtibute_value_id']);
            }

            Sku::updateOrCreate([
                'spu_id'             => $spu->id,
                'company_id'         => $spu->company_id,
                'attribute_id'       => $attribute->id,
                'attribute_value_id' => $attribute_value->id,
            ], [
                'price' => floatval($price['price']),
            ]);
        }
    }
}
