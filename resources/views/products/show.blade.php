<h1>Detail Product</h1>

<p>Nama : {{ $product->name }}</p>

<p>Description : {{ $product->description }}</p>

<p>Price : {{ $product->price }}</p>

<p>Stock : {{ $product->stock }}</p>

<p>
    Category :
    {{ $product->category->name ?? '-' }}
</p>

<p>
    Brand :
    {{ $product->brand->name ?? '-' }}
</p>

<a href="{{ route('products.index') }}">
    Kembali
</a>