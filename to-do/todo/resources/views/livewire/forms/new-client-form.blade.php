<div>
    <section class="mt-10">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <h1>coom say hellos</h1>

                
                <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                <input wire:model="last_name" type="text" name="last_name" id="last_name" 
                    class="block mb-6 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-3" 
                    placeholder="0.00"
                >
                <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                <input wire:model="first_name" type="text" name="first_name" id="first_name" 
                    class="block mb-6 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-3" 
                    placeholder="0.00"
                >
                <label for="a_number" class="block text-sm font-medium leading-6 text-gray-900">A-number</label>
                <input wire:model="a_number" type="text" name="a_number" id="a_number" 
                    class="block mb-6 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-3" 
                    placeholder="0.00"
                >
                <label for="social_security" class="block text-sm font-medium leading-6 text-gray-900">Social Security</label>
                <input wire:model="social_security" type="text" name="social_security" id="social_security" 
                    class="block mb-6 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-3" 
                    placeholder="0.00"
                >
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <input wire:model="email" type="text" name="email" id="email" 
                    class="block mb-6 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-3" 
                    placeholder="0.00"
                >
                <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                <input wire:model="phone" type="text" name="phone" id="phone" 
                    class="block mb-6 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-3" 
                    placeholder="0.00"
                >
                <button wire:click=addNewClient() class="px-3 py-1 mr-1 mb-5 bg-green-500 text-white rounded">Add new client</button>
            </div>
        </div>
    </section>
</div>