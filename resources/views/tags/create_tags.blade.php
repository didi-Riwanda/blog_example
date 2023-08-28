<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Data Tags</title>
</head>
<body>
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        
        <input type="text" name="name" id="name"> <label for="name">Tags</label>
        <button>Simpan</button>
    </form>
</body>
</html>