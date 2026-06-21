<h1>Tambah Brand</h1>

<form method="POST" action="{{ route('brands.store') }}">
@csrf

<input type="text" name="name" placeholder="Nama Brand">

<br><br>

<button>Simpan</button>

</form>