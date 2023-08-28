<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Data Post</title>
</head>
<body>
    <form action="{{ route('posts.update', $data_lama->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" id="title" value="{{ $data_lama->title }}"> <label for="title">Judul Postingan</label>
        <input type="text" name="content" id="content" value="{{ $data_lama->content }}"> <label for="content">Content</label>
        <input type="date" name="timezone" id="timezone" value="{{ $data_lama->timezone }}"> <label for="timezone">Timezone</label>
        <select name="tags_id" id="tags_id">
            @foreach ($tags as $tag)
                @if (old('tags_id', $data_lama->tags_id) == $tag->id)
                    <option value="{{ $tag->id }}" selected>{{ $tag->name }}</option>
                @else
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endif
            @endforeach
        </select>

        <button>Ubah</button>
    </form>
</body>
</html>
