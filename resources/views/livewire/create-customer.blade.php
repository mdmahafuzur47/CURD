<div class="max-w-lg  mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">Contact Form</h2>

    <form wire:submit.prevent='submit'>
        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" wire:model='name' class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
            @error('name')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" wire:model='email' class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
    @error('email')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Phone</label>
            <input wire:model='phone' type="text"  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
    @error('phone')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Submit</button>
    </form>
</div>

