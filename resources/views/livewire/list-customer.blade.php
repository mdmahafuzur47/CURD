<div class="max-w-5xl mt-10 mx-auto">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold mb-6">Customer List</h2>
        <a href="/" class="text-green-600">Add Customer</a>
    </div>

    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 text-left text-gray-700 font-semibold">Id</th>
                <th class="px-4 py-2 text-left text-gray-700 font-semibold">Name</th>
                <th class="px-4 py-2 text-left text-gray-700 font-semibold">Email</th>
                <th class="px-4 py-2 text-left text-gray-700 font-semibold">Phone</th>
                <th class="px-4 py-2 text-left text-gray-700 font-semibold">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td class="px-4 py-2 border-t border-gray-300">{{$customer->id}}</td>
                    <td class="px-4 py-2 border-t border-gray-300">{{$customer->name}}</td>
                    <td class="px-4 py-2 border-t border-gray-300">{{$customer->email}}</td>
                    <td class="px-4 py-2 border-t border-gray-300">{{$customer->phone}}</td>
                    <td class="px-4 py-2 border-t border-gray-300">
                        <button class="text-blue-600 hover:text-blue-800">Edit</button>
                        <button class="text-red-600 hover:text-red-800 ml-4">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
