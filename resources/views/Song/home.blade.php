<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="w-full max-w-4xl mx-auto">
        <h1 class="text-5xl font-bold">All Favorite Songs</h1>
        <div>
        @foreach ($songs as $song)
        <div class="w-full border flex flex-col gap-4 items-center rounded-2xl">    
        <h1>{{ $song->singer }}</h1>
        @if ($song->song)
                <audio src="{{ asset('storage/'. $song->song) }}" controls></audio> 
                <a href="{{ asset('storage/'. $song->song) }}" download="{{ asset('storage/'. $song->song) }}">Download the Song</a>           
        @endif

        </div>
        @endforeach    
        </div> 
    </div>
</body>
</html>