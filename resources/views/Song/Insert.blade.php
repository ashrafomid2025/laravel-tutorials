<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <form action="{{ URL('songs/insert') }}" method="post">
        @csrf
        <input type="text" placeholder="enter the singer name"  class="py-2 px-4 border">
        <input type="file" name="song" accept="audio/*">
        <button type="submit">Save</button>
    </form>
</body>
</html>