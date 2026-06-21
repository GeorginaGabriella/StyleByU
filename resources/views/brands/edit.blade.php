<h1>Edit Brand</h1>

<form method="POST" action="{{ route('brands.update',$brand) }}">
@csrf
@method('PUT')

<input type="text" name="name" value="{{ $brand->name }}">

<br><br>

<button>Simpan</button>

</form>