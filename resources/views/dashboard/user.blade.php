<h1>USER DASHBOARD</h1>

<p>
    Halo {{ auth()->user()->name }}
</p>

<ul>
    <li>Browse Product</li>
    <li>My Cart</li>
    <li>My Orders</li>
</ul>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit">
        Logout
    </button>
</form>