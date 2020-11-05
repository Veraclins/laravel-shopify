<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateCustomer extends Component
{
    use ShopifyAPI;

    public $first_name;
    public $last_name;
    public $email;

    protected $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email',
    ];

    public function create()
    {
        $params = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
        ];
        $this->validate();
        try {
            $this->createResource('/customers.json', ['customer' => $params]);

            if ($this->status === 422) {
                return $this->message = "Email is already registered or invalid";
            } elseif ($this->status >= 400) {
                return $this->message = 'Whoops! Something went wrong. Please try again!';
            }
            return redirect()->route('customers');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function render()
    {
        return view('livewire.create-customer');
    }
}
