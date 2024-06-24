<table class='mx-auto'>
    <tr>
        <td class="px-6 py-4">All</td>
        @foreach ($categories as $category)
            <td class="px-6 py-4">{{ $category->name }}</td>
        @endforeach
    </tr>
</table>
