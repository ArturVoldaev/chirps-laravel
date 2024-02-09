<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class TableClients extends Component
{

    public $id;

    public function deleteClient($id)
    {
        Client::find($id)->delete();
    }

    public function addNewClient()
    {
        return redirect('/client-page');
    }

    public function render()
    {
        $initinalData = Client::get();
        return view('livewire.table-clients', [
            'clients' => $initinalData
        ]);
    }


}
