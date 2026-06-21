<h1>STYLEBYU - Category</h1>

<a href="{{ route('categories.create') }}">
    Tambah Category
</a>

<br><br>

@if(session('success'))
    <p style="color:green">
        {{ session('success') }}
    </p>
@endif

@if(session('error'))
    <p style="color:red">
        {{ session('error') }}
    </p>
@endif

<table border="1" cellpadding="5" cellspacing="0">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Category</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($categories as $category)

        <tr>

            <td>
                {{ $loop->iteration }}
            </td>

            <td>
                {{ $category->name }}
            </td>

            <td>

                <a href="{{ route('categories.show',$category) }}">
                    Detail
                </a>

                |

                <a href="{{ route('categories.edit',$category) }}">
                    Ubah
                </a>

                |

                <form
                    action="{{ route('categories.destroy',$category) }}"
                    method="POST"
                    style="display:inline;"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>