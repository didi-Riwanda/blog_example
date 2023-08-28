<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Halaman Posts</title>
</head>
<body>
    @if ($pesan = Session::get('success'))
        <p>{{ $pesan }}</p>
    @endif
    @auth
        
    <a href="{{ route('posts.create') }}">Tambah Data</a>
    @endauth
    {{-- <ul>
        @foreach ($posts as $p)
            <li>{{ $p->title }}</li>
            <li>{{ $p->content }}</li>
            <li>{{ $p->timezone }}</li>
            <li>{{ $p->tag->name }}</li>

            <form action="{{ route('posts.destroy', $p->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a href="{{ route('posts.edit', $p->id) }}">Ubah</a>
                <a href="{{ route('posts.show', $p->id) }}">Detail</a>
                <button onclick="return confirm('Yakin Data Dihapus?')">Hapus</button>
            </form>
        @endforeach
    </ul> --}}


    <div class="container mt-4">
    
        @foreach ($posts as $p)
            <div class="card mb-3">
                <div class="card-body">
                    <a class="card-title text-decoration-none" href="{{ route('posts.show', $p->id) }}"><h5>{{ $p->title }}</h5></a>
                    <p class="card-text">{{ $p->content }}</p>
                    <p class="card-text">{{ $p->tag->name }}</p>

                    @auth
                    <form action="{{ route('posts.destroy', $p->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
        
                        <a class="btn btn-success" href="{{ route('posts.edit', $p->id) }}">Ubah</a>
                        <a class="btn btn-warning" href="{{ route('posts.show', $p->id) }}">Detail</a>
                        <a class="btn btn-success" href="/post/{{ $p->id }}">Comment</a>
                        <button class="btn btn-danger" onclick="return confirm('Yakin Data Dihapus?')">Hapus</button>
                    </form>
                        
                    @endauth

                
                </div>
            </div>
        @endforeach

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>