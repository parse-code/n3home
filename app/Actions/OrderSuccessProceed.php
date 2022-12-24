<?php

namespace App\Actions;

use App\Exceptions\OrderWasProceed;
use App\Models\Order;
use Lorisleiva\Actions\Concerns\AsAction;

class OrderSuccessProceed
{
    use AsAction;

    public function handle(Order $order)
    {
        if ($order->status !== 'pending') {
            throw new OrderWasProceed($order);
        }

        $user = $order->user;

    }
}
