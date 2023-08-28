<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Data Tag</title>
</head>
<body>
    <form action="{{ route('tags.update', $data_lama->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name" id="name" value="{{ $data_lama->name }}"> <label for="name">Tags</label>
        <button>Ubah</button>
    </form>
</body>
</html>