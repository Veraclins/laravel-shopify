<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Customer extends Component
{
    use ShopifyAPI;

    public function render()
    {
        return view('livewire.customer', [
            'customers' => $this->getData('/customers.json?limit=10')['customers'],
        ]);
    }
}
