<h1>Edit Banner</h1>

<form
    method="POST"
    action="{{ route('banners.update',$banner) }}"
>

    @csrf
    @method('PUT')

    Title

    <br>

    <input
        type="text"
        name="title"
        value="{{ $banner->title }}"
        required
    >

    <br><br>

    Image URL

    <br>

    <input
        type="text"
        name="image_url"
        value="{{ $banner->image_url }}"
    >

    <br><br>

    Description

    <br>

    <textarea name="description">{{ $banner->description }}</textarea>

    <br><br>

    <button type="submit">
        Update
    </button>

</form>

<br>

<a href="{{ route('banners.index') }}">
    Kembali
</a>