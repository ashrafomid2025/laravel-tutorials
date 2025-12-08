<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stundent</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-6xl w-full p-6 mx-auto my-12">
 <div class="">
   
        @if ($errors->any())
         <ol class="list-decimal list-inside bg-red-400 text-gray-200 p-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
         </ol>
            
        @endif
    
 </div>
        <div class="border w-full">
            <h1 class="py-4 text-center text-2xl text-white bg-blue-500">Add Students</h1>
            <form enctype="multipart/form-data" action="{{ URL('student/create') }}" class="flex flex-col gap-2 w-10/12 mx-auto my-2" method="post">
                @csrf
                {{-- cross-site request forgery,  old data --}}
                <input  type="text"  name="name" value="{{ old('name') }}" placeholder="Enter your name" class="py-2 w-full focus:outline-0 border rounded-md">
                <input type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Enter your last name" class="py-2 w-full focus:outline-0 border rounded-md">
                <input type="number" name="score" value="{{ old('score') }}" placeholder="Enter your score" class="py-2 w-full focus:outline-0 border rounded-md">
                <input type="number" name="age" value="{{ old('age') }}" placeholder="Enter your age" class="py-2 w-full focus:outline-0 border rounded-md">
                <label>Gender</label>
                <div class="flex gap-7 ">
                male <input type="radio" name="gender" value="m" {{ old('gender') ==="m"?"checked":"" }}/>
                female <input type="radio" name="gender" value="f" {{ old('gender') === "f"? "checked":"" }}/>
                </div>
                <label for="image">profile picture</label>
                <input type="file" accept="image/*" name="image" id="image"  class="py-2 w-full focus:outline-0 border rounded-md">
                <button type="submit" class="py-2 bg-green-400 text-white text-center">Save</button>
            </form>
        </div>
    </div>
</body>
</html>