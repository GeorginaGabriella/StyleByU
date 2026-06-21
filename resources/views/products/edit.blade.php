<h1>Edit Product</h1>

<form
    method="POST"
    action="{{ route('products.update',$product) }}"
>

    @csrf
    @method('PUT')

    Nama

    <br>

    <input
        type="text"
        name="name"
        value="{{ $product->name }}"
    >

    <br><br>

    Description

    <br>

    <textarea name="description">{{ $product->description }}</textarea>

    <br><br>

    Price

    <br>

    <input
        type="number"
        name="price"
        value="{{ $product->price }}"
    >

    <br><br>

    Stock

    <br>

    <input
        type="number"
        name="stock"
        value="{{ $product->stock }}"
    >

    <br><br>

    Category

    <br>

    <select name="category_id">

        @foreach($categories as $c)

        <option
            value="{{ $c->id }}"
            {{ $product->category_id == $c->id ? 'selected' : '' }}
        >
            {{ $c->name }}
        </option>

        @endforeach

    </select>

    <br><br>

    Brand

    <br>

    <select name="brand_id">

        @foreach($brands as $b)

        <option
            value="{{ $b->id }}"
            {{ $product->brand_id == $b->id ? 'selected' : '' }}
        >
            {{ $b->name }}
        </option>

        @endforeach

    </select>

    <br><br>

    <button type="submit">
        Update
    </button>

</form>