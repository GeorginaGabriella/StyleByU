<h1>Tambah Product</h1>

<form method="POST" action="{{ route('products.store') }}">
@csrf

Nama:<br>
<input type="text" name="name"><br><br>

Description:<br>
<textarea name="description"></textarea><br><br>

Price:<br>
<input type="number" name="price"><br><br>

Stock:<br>
<input type="number" name="stock"><br><br>

Category:<br>
<select name="category_id">
@foreach($categories as $c)
<option value="{{ $c->id }}">{{ $c->name }}</option>
@endforeach
</select><br><br>

Brand:<br>
<select name="brand_id">
@foreach($brands as $b)
<option value="{{ $b->id }}">{{ $b->name }}</option>
@endforeach
</select><br><br>

<button>Simpan</button>
</form>