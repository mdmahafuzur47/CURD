<?php

namespace App\Livewire;

use App\Models\customer;
use Livewire\Component;

class ListCustomer extends Component
{

    public $customers = [];

    public function mount()
    {
        $this->customers = customer::all();
    }

    public function deleteCustomer(customer $cus)
    {
        $cus->delete();
        session()->flash('success', "Customer deleted successfully");
        return $this->redirect('/list', navigate: true);
    }

    public function render()
    {
        return view('livewire.list-customer');
    }
}
