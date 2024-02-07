<?php

namespace App\Livewire\Forms;

use App\Models\Client;
use Livewire\Component;

class NewClientForm extends Component
{


    public $last_name;
    public $first_name;
    public $a_number;
    public $social_security;
    public $email;
    public $phone;


 
    public function addNewClient()

    {
        Client::create([
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'a_number' => $this->a_number,
            'social_security' => $this->social_security,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);
 
        return redirect()->to('/');
    }




    public function render()
    {
        return view('livewire.forms.new-client-form');
    }
}
