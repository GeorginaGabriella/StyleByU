<h1>PRODUCT STYLEBYU</h1>

<form method="GET">
    <input type="text" name="search" placeholder="Cari produk">
    <button>Cari</button>
</form>

<br>

<a href="{{ route('products.create') }}">Tambah Product</a>

<br><br>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Aksi</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category->name ?? '-' }}</td>
        <td>{{ $product->brand->name ?? '-' }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>
            <a href="{{ route('products.edit',$product) }}">Edit</a>

            <form method="POST" action="{{ route('products.destroy',$product) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button>Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>