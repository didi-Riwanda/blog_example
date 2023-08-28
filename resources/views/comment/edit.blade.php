<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Comment</title>
</head>
<body>
    <form action="{{ route('comment.update', $data_lama->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name" id="name" value="{{ $data_lama->name }}"> <label for="name">Nama</label>
        <input type="text" name="email" id="email" value="{{ $data_lama->email }}"> <label for="email">Email</label>
        <input type="text" name="body" id="body" value="{{ $data_lama->body }}"> <label for="body">Body</label>
        <select name="post_id" id="post_id">
            @foreach ($posts as $p)
                @if (old('post_id', $data_lama->post_id) == $p->id)
                    <option value="{{ $p->id }}" selected>{{ $p->title }}</option>
                @else
                    <option value="{{ $p->id }}">{{ $p->title }}</option>
                @endif
            @endforeach
        </select>

        <button>Ubah</button>
    </form>
</body>
</html>