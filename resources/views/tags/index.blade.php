<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tags</title>
</head>
<body>
    @if ($pesan = Session::get('success')) 
        <p>{{ $pesan }}</p>
    @endif

    <a href="{{ route('tags.create') }}">Tambah Data</a>
    <ul>
        @foreach ($tags as $tag)
            <li>{{ $tag->name }}</li>

            <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a href="{{ route('tags.edit', $tag->id) }}">Ubah</a>
                <button onclick="return confirm('Yakin Data Dihapus?')">Hapus</button>
            </form>
        @endforeach
    </ul>
</body>
</html>