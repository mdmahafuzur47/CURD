<?php

namespace App\Livewire;

use App\Models\customer;
use Livewire\Component;

class CreateCustomer extends Component
{

    public $name = "";
    public $email = "";
    public $phone = "";

    public function submit()
    {

        $validateData =  $this->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required",
        ]);

        customer::create($validateData);

        $this->reset();

        session()->flash('success', 'Successfully created new customer.');
        return $this->redirect('/list', navigate: true);
    }


    public function render()
    {
        return view('livewire.create-customer');
    }
}
