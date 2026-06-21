<h1>Tambah Category</h1>

<form
    method="POST"
    action="{{ route('categories.store') }}"
>

    @csrf

    Nama Category

    <br>

    <input
        type="text"
        name="name"
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