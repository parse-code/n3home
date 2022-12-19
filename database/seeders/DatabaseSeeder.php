<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use App\Models\ProductSpec;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'email' => 'demo@demo.com',
        ]);

        $company = Company::factory()->create([
            'slug' => 'freshair',
            'name' => 'Fresh air',
        ]);

        $user->companies()->attach($company, [
            'role' => 'admin',
        ]);

        $product = Product::create([
            'name'       => '空调清洗',
            'company_id' => $company->id,
        ]);

        for ($unit = 1; $unit <= 4; $unit++) {
            ProductSpec::create([
                'product_id' => $product->id,
                'group'      => '单次服务',
                'company_id' => $product->company_id,
                'name'       => $unit . '台' . ' 1 次',
                'price'      => 50 * $unit,
            ]);

            ProductSpec::create([
                'product_id' => $product->id,
                'group'      => '包年服务',
                'company_id' => $product->company_id,
                'name'       => $unit . '台' . ' 4次/1年',
                'price'      => 150 * $unit,
                'count'      => 4,
            ]);
        }

        $product2 = Product::create([
            'name'       => '打扫卫生',
            'company_id' => $company->id,
        ]);
        ProductSpec::create([
            'product_id' => $product2->id,
            'company_id' => $product2->company_id,
            'name'       => '1次',
            'price'      => 50,
        ]);


    }
}
