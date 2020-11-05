<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Order extends Component
{
    use ShopifyAPI;

    public function render()
    {
        return view('livewire.order', [
            'orders' => $this->getData('/orders.json?limit=5&order=updated_at desc')['orders'],
        ]);
    }
}
