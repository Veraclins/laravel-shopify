<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Customer extends Component
{
    public $response;

    public function fetch()
    {
        $response = Http::get('http://test.com');
    }
    public function render()
    {
        return view('livewire.customer');
    }
}
