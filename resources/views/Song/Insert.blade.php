<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Songs</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <form action="{{ URL('songs/insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        {{-- cross site request forgery --}}
        <input type="text" name="singer" placeholder="enter the singer name"  class="py-2 px-4 border">
        <input type="file" name="song" accept="audio/*">
        <button type="submit">Save the music</button>
    </form>
</body>
</html>