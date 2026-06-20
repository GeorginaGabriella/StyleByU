<h1>ADMIN DASHBOARD</h1>

<p>
    Halo {{ auth()->user()->name }}
</p>

<ul>
    <li>Product Management</li>
    <li>Category Management</li>
    <li>Brand Management</li>
    <li>Order Management</li>
</ul>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit">
        Logout
    </button>
</form>