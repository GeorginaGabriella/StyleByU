<h1>REGISTER STYLEBYU</h1>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li style="color:red;">
            {{ $error }}
        </li>
    @endforeach
</ul>
@endif

<form method="POST" action="{{ route('register.post') }}">
    @csrf

    Nama
    <br>

    <input type="text" name="name">

    <br><br>

    Email
    <br>

    <input type="email" name="email">

    <br><br>

    Password
    <br>

    <input type="password" name="password">

    <br><br>

    Konfirmasi Password
    <br>

    <input type="password" name="password_confirmation">

    <br><br>

    <button type="submit">
        Register
    </button>
</form>
