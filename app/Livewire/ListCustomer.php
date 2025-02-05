<?php

namespace App\Livewire;

use App\Models\customer;
use Livewire\Component;

class ListCustomer extends Component
{

    public $customers = [];

    public function mount(){
        $this->customers = customer::all();
    }

    public function render()
    {
        return view('livewire.list-customer');
    }
}
