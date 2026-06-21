<h1>Ubah Category</h1>

<form
    method="POST"
    action="{{ route('categories.update',$category) }}"
>

    @csrf
    @method('PUT')

    Nama Category

    <br>

    <input
        type="text"
        name="name"
        value="{{ $category->name }}"
        required
    >

    <br><br>

    <button type="submit">
        Simpan
    </button>

</form>

<br>

<a href="{{ route('categories.index') }}">
    Kembali
</a>