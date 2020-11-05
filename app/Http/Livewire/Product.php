<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    use ShopifyAPI;

    public function render()
    {
        return view('livewire.product', [
            'products' => $this->getData('/products.json?limit=10&order=created_at desc')['products'],
        ]);
    }
}
