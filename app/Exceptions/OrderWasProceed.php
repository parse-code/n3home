<?php

namespace App\Exceptions;

use App\Models\Order;
use Exception;

class OrderWasProceed extends Exception
{
    public Order $order;

    public function __construct(Order $order = null)
    {
        parent::__construct(message: "Order was already procced", code: 400);
        $this->order = $order;
    }
}
