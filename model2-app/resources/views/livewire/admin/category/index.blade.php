
<table class="w-full text-sm text-left rtl:text-right ">
    <thead class="text-xs text-gray-700 uppercase bg-gray-300">
        <tr>
            <th class="px-6 py-3">ID</th>
            <th class="px-6 py-3">Name</th>
            <th class="px-6 py-3">Slug</th>
            <th class="px-6 py-3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td class="px-6 py-4">{{ $category->id }}</td>
            <td class="px-6 py-4">{{ $category->name }}</td>
            <td class="px-6 py-4">{{ $category->slug }}</td>
            <td class="px-6 py-4">
                <a href="{{ url('dashboard/'. $category->id .'/edit') }}" class="bg-transparent text-white py-4 px-8 border bg-green-500 rounded ">Edit</a>
                <a href="{{ url('dashboard/'. $category->id .'/delete') }}" class="bg-transparent text-white py-4 px-8 border bg-red-500 rounded ">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>