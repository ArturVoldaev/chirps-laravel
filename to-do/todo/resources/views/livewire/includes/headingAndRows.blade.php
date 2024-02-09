<div class="overflow-x-auto">
    <button wire:click="addNewClient()" 
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-5 rounded">
        Add new client
    </button>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-4 py-3">id</th>
                <th scope="col" class="px-4 py-3">last_name</th>
                <th scope="col" class="px-4 py-3">first_name</th>
                <th scope="col" class="px-4 py-3">a_number</th>
                <th scope="col" class="px-4 py-3">social_security</th>
                <th scope="col" class="px-4 py-3">email</th>
                <th scope="col" class="px-4 py-3">phone</th>
                <th scope="col" class="px-4 py-3 flex justify-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr :key={{$client->id}} class="border-b dark:border-gray-700">
                <th scope="row"
                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $client->id}}</th>
                <td class="px-4 py-3"> {{ $client->last_name}}</td>
                <td class="px-4 py-3 text-green-500">
                    {{ $client->first_name}}</td>
                <td class="px-4 py-3">{{ $client->a_number}}</td>
                <td class="px-4 py-3">{{ $client->social_security}}</td>
                <td class="px-4 py-3">{{ $client->email}}</td>
                <td class="px-4 py-3">{{ $client->phone}}</td>
                <td class="px-4 py-3 flex items-center justify-center">
                    <form action="client-page/{{$client->id}}" method="post">
                        @csrf
                        <button class="px-3 py-1 bg-blue-500 text-white rounded">edit</button>
                    </form>
                    <button wire:click="deleteClient({{$client->id}})" class="px-3 py-1 ml-5 bg-red-500 text-white rounded">delete</button>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>