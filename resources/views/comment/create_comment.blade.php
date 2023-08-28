<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Form Input Comment</title>
</head>
<body>
    {{-- <form action="{{ route('comment.store') }}" method="POST">
        @csrf

        <input type="text" name="name" id="name"> <label for="name">Nama</label>
        <input type="text" name="email" id="email"> <label for="email">Email</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea> <label for="body">Comment</label>
        <select name="post_id">
                <option>--Select--</option>
            @foreach ($posts as $p)
                <option value="{{ $p->id }}">{{ $p->title }}</option>
            @endforeach
        </select>

        <button>Simpan</button>
    </form> --}}

    <div class="container">
    <form action="{{ route('comment.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 form-check">
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
            <label class="form-check-label" for="body">Comment</label>
        </div>
        <div class="mb-3 form-check">
            {{-- <select name="post_id">
                    <option>--Select--</option>
                @foreach ($posts as $p)
                    <option value="{{ $p->id }}">{{ $p->title }}</option>
                @endforeach
            </select> --}}
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>

    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>