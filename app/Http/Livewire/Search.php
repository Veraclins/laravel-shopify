<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    use ShopifyAPI;

    public $search;
    public $searched;
    public $loading = false;
    public $orders;

    public function searchOrders()
    {
        try {
            $this->loading = true;
            $result = $this->getData('/orders.json?order=updated_at desc')['orders'];
            $this->orders = array_filter($result, [$this, 'hasProductWithTag']);
        } catch (\Throwable $th) {
            throw $th;
        } finally {
            $this->searched = true;
            // $this->loading = false;
        }
    }

    public function hasProductWithTag($order)
    {
        $text = $this->search;

        $products = array_filter($order['line_items'], function ($el) use ($text) {
            return (stripos($el['name'], $text) !== false);
        });

        return count($products) > 0;
    }

    public function render()
    {
        return view('livewire.search');
    }
}
