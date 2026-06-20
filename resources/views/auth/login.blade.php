<h1>LOGIN STYLEBYU</h1>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li style="color:red;">
            {{ $error }}
        </li>
    @endforeach
</ul>
@endif

<form method="POST" action="{{ route('login.post') }}">
    @csrf

    Email
    <br>

    <input type="email" name="email">

    <br><br>

    Password
    <br>

    <input type="password" name="password">

    <br><br>

    <button type="submit">
        Login
    </button>
</form>

<br>

<a href="{{ route('register') }}">
    Register
</a>