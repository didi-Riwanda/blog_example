<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Data Comment</title>
</head>
<body>

    @if ($pesan = Session::get('success'))
        <p>{{ $pesan }}</p>
    @endif
    <a href="{{ route('comment.create') }}">Tambah Data</a>
    <ul>
        @foreach ($comment as $com)
            <li>{{ $com->name }}</li>
            <li>{{ $com->email }}</li>
            <li>{{ $com->body }}</li>
            {{-- <li>{{ $com->post->title }}</li> --}}

            <form action="{{ route('comment.destroy', $com->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a href="{{ route('comment.edit', $com->id) }}">Ubah</a>
                <button onclick="return confirm('Yakin Data Dihapus?')">Hapus</button>
            </form>
        @endforeach
    </ul>
</body>
</html>