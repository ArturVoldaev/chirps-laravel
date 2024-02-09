<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientForm extends Component
{


    
    public $client;

    public $last_name;
    public $first_name;
    public $a_number;
    public $social_security;
    public $email;
    public $phone;

    public function mount($client)
    {
        if ($client) {
            $this->last_name = $client->last_name;
            $this->first_name = $client->first_name;
            $this->a_number = $client->a_number;
            $this->social_security = $client->social_security;
            $this->email = $client->email;
            $this->phone = $client->phone;
        } else {
            $this->last_name = 'Last Name';
            $this->first_name = 'First Name';
            $this->a_number = 'A-number';
            $this->social_security = 'Social security';
            $this->email = 'Email';
            $this->phone = 'Phone';
        }


    }



    public function editClient($id)
    {
       
        $newData = [
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'a_number' => $this->a_number,
            'social_security' => $this->social_security,
            'email' => $this->email,
            'phone' => $this->phone,

        ];
       
        Client::find($id)->update($newData);

        return redirect('/'); 
    }

    public function createNewClient()
    {
        $newData = [
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'a_number' => $this->a_number,
            'social_security' => $this->social_security,
            'email' => $this->email,
            'phone' => $this->phone,

        ];

        Client::create($newData);
        return redirect('/'); 
    }


    public function render()
    {
        return view('livewire.client-form');
    }
}
