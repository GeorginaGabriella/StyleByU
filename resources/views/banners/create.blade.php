<h1>Tambah Banner</h1>

<form
    method="POST"
    action="{{ route('banners.store') }}"
>

    @csrf

    Title

    <br>

    <input
        type="text"
        name="title"
        required
    >

    <br><br>

    Image URL

    <br>

    <input
        type="text"
        name="image_url"
    >

    <br><br>

    Description

    <br>

    <textarea name="description"></textarea>

    <br><br>

    <button type="submit">
        Simpan
    </button>

</form>

<br>

<a href="{{ route('banners.index') }}">
    Kembali
</a>