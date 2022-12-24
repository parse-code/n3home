<?php

namespace App\Actions;

use App\Models\Order;
use App\Models\Sku;
use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateOrder
{
    use AsAction;

    public function handle(User $user, Sku $productSpec): Order
    {
        return Order::create([
            'user_id'         => $user->id,
            'product_spec_id' => $productSpec->id,
            'price'           => $productSpec->price,
            'status'          => 'pending',
        ]);
    }
}
