<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="search" class = "max-w-6xl px-12 mx-auto py-12">
        <form action={{ URL('student') }} method="GET" class="border p-4 max-w-2xl mx-auto w-full flex">
            <input class="border py-2 w-10/12 px-5" type="text" name="search" id="search">
            <button type="submit" class="py-2 px-5 bg-blue-400 text-white">Search</button>
        </form>
        <table class="border w-full border-collapse mt-2">
            <tr>
                <th class="border bg-blue-500 text-white px-4 py-2">ID</th>
                <th class="border bg-blue-500 text-white px-4 py-2">Name</th>
                <th class="border bg-blue-500 text-white px-4 py-2">Last Name</th>
                <th class="border bg-blue-500 text-white px-4 py-2">Age</th>
                <th class="border bg-blue-500 text-white px-4 py-2">gender</th>
                <th class="border bg-blue-500 text-white px-4 py-2">Score</th>
            </tr>
            @foreach ($students as $stundent)
                <tr>
                    <td class="border px-4 py-2">{{ $stundent->id }}</td>
                    <td class="border px-4 py-2">{{ $stundent->name }}</td>
                    <td class="border px-4 py-2">{{ $stundent->lastName }}</td>
                    <td class="border px-4 py-2">{{ $stundent->age }}</td>
                    <td class="border px-4 py-2">{{ $stundent->gender }}</td>
                    <td class="border px-4 py-2">{{ $stundent->score }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>