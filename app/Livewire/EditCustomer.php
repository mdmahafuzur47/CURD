<?php

namespace App\Livewire;

use App\Models\customer;
use Livewire\Component;

class EditCustomer extends Component
{

    public $singleCustomer;
    public $name;
    public $email;
    public $phone;

    public function mount(customer $id)
    {
        $this->singleCustomer = $id;
        $this->name = $this->singleCustomer->name;
        $this->email = $this->singleCustomer->email;
        $this->phone = $this->singleCustomer->phone;
    }


    public function updateCustomer()
    {
        $validated = $this->validate(([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
        ]));

        $this->singleCustomer->update($validated);
        session()->flash('success', "Customer successfully updated");
        return $this->redirect('/list', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }
}
