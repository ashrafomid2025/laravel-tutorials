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
        <div class="border w-full">
            <h1 class="py-4 text-center text-2xl text-white bg-blue-500">Update Students</h1>
            <form action="{{ URL('student/edit',$student->id ) }}" class="flex flex-col gap-2 w-10/12 mx-auto my-2" method="post">
                @csrf
                @method('PUT')
                {{-- cross-site request forgery --}}
                <input type="text" name="name" value="{{ $student->name }}" placeholder="Enter your name" class="py-2 w-full focus:outline-0 border rounded-md">
                <input type="text" name="lastname" value="{{ $student->lastName }}" placeholder="Enter your name" class="py-2 w-full focus:outline-0 border rounded-md">
                <input type="number" value="{{ $student->score }}" name="score" placeholder="Enter your name" class="py-2 w-full focus:outline-0 border rounded-md">
                <input type="number" value="{{ $student->age }}" name="age" placeholder="Enter your name" class="py-2 w-full focus:outline-0 border rounded-md">
                <label>Gender</label>
                <div class="flex gap-7 ">
                male <input type="radio" name="gender" value="m" {{ $student->gender =="m"?"checked":"" }}/>
                female <input type="radio" name="gender" value="f" {{ $student->gender ==="f"? "checked": ""}} />
                </div>
                <button type="submit" class="py-2 bg-green-400 text-white text-center">Save</button>
            </form>
        </div>
    </div>
</body>
</html>