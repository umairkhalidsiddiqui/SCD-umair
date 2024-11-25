<x-web-layout>
    <div style="text-align: center; margin-top: 20px;">
        <a href="/create" class="btn btn-dark mt-2">Add New Product</a>
    </div>

    <div style="margin: 20px auto; width: 80%;">
        <table class="table table-hover mt-2 text-center">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>
                        <a href="products/{{ $product->id }}/show" class="text-dark" style="text-decoration: none;">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td>
                        <img src="products/{{ $product->image }}" class="rounded-circle" width="50" height="50" />
                    </td>
                    <td>
                        <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>

                        <form method="POST" class="d-inline" action="products/{{ $product->id }}/delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-web-layout>