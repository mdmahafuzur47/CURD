<?php

namespace App\Livewire;

use App\Models\customer;
use Livewire\Component;

class ViewSingleCustomer extends Component
{

    public $singleCustomer;

    public function mount(customer $id)
    {
        $this->singleCustomer = $id;
    }

    public function render()
    {
        return view('livewire.view-single-customer');
    }
}
