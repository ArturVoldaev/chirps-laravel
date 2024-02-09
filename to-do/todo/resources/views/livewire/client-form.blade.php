<div>
    <div class="overflow-x-auto p-10">
        <div class="mb-5">
            <label for="last_name">last_name</label>
            <input wire:model="last_name"
                class=" ml-5 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="last_name">
        </div>

        <div class="mb-5"> <label for="first_name">first_name</label>
            <input wire:model="first_name" type="text" name="first_name"
                class=" ml-5 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-5"> <label for="a_number">a_number</label>
            <input wire:model="a_number" type="text" name="a_number"
                class=" ml-5 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-5"> <label for="social_security">social_security</label>
            <input wire:model="social_security" type="text" name="social_security"
                class=" ml-5 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-5"> <label for="email">email</label>
            <input wire:model="email" type="text" name="email"
                class=" ml-5 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-5">
            <label for="id">phone</label>
            <input wire:model="phone" type="text" name="phone"
                class=" ml-5 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        @if (!empty($client->phone))
        <button class="px-3 py-1 bg-blue-500 text-white rounded" wire:click="editClient({{$client->id}})"
            type="submit">Edit client</button>
        @else
        <button class="px-3 py-1 bg-blue-500 text-white rounded" wire:click="createNewClient()" type="submit">Create new
            client</button>
        @endif
    </div>
</div>