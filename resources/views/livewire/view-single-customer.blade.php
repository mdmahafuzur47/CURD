<div class="flex min-h-screen h-full items-center justify-center">
    {{-- Stop trying to control. --}}
    <div class="max-w-5xl border p-5 rounded-md ">
        <h2>{{$singleCustomer->name}}</h2>
        <h2>{{$singleCustomer->email}}</h2>
        <h2>{{$singleCustomer->phone}}</h2>
        <button wire:navigate href="/list/"
            class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-700">back</button>
    </div>
</div>
