<div>
    <button wire:click=addClient() class="px-3 py-1 mr-1 mb-5 bg-green-500 text-white rounded">Add new client</button>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-4 py-3">ID</th>
                <th scope="col" class="px-4 py-3">Last name</th>
                <th scope="col" class="px-4 py-3">First name</th>
                <th scope="col" class="px-4 py-3">A-number</th>
                <th scope="col" class="px-4 py-3">Social Security</th>
                <th scope="col" class="px-4 py-3">Email</th>
                <th scope="col" class="px-4 py-3">Phone</th>
                <th scope="col" class="px-4 py-3 flex justify-center"> Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr class="border-b dark:border-gray-700">
                <td class="px-4 py-3">{{$client->id}}</td>
                <td class="px-4 py-3 text-green-500">{{$client->last_name}}</td>
                <td class="px-4 py-3">{{$client->first_name}}</td>
                <td class="px-4 py-3">{{$client->a_number}}</td>
                <td class="px-4 py-3 text-green-500">{{$client->social_security}}</td>
                <td class="px-4 py-3">{{$client->email}}</td>
                <td class="px-4 py-3">{{$client->phone}}</td>
                <td class="px-4 py-3 flex items-center justify-end">
                    <button class="px-3 py-1 mr-1 bg-red-500 text-white rounded">-</button>
                    <button class="px-3 py-1 mr-1 bg-blue-500 text-white rounded">edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>