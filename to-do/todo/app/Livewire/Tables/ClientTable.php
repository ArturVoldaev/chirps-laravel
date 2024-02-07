<?php

namespace App\Livewire\Tables;

use App\Models\Client;
use Livewire\Component;

class ClientTable extends Component
{


    // public function addClient()
    // {
    //     $flight = Client::create([
    //         'last_name' => 'London to Paris2',
    //         'first_name' => 'London to Paris',
    //         'a_number' => 'London to Paris',
    //         'social_security' => 'London to Paris',
    //         'email' => 'London to Paris',
    //         'phone' => 'London to Paris',
    //     ]);
    //     return $flight;
    // }

    public function addClient()
    {
        return redirect()->to('/new-client-form');
    }



    public function render()
    {
        $clients = Client::get();
        return view('livewire.tables.client-table', [
            'clients' => $clients
        ]);
    }
}
