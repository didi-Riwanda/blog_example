<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Data Posts</title>
</head>
<body>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <input type="text" name="title" id="title"> <label for="title">Judul Postingan</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea> <label for="content">Body</label>
        <input type="date" name="timezone" id="timezone"> <label for="timezone">Timezone</label>
        <select name="tags_id">
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>              
            @endforeach
        </select>

        <button>Simpan</button>
    </form>
</body>
</html>