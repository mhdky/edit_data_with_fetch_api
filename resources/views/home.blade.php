<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit data tanpa pindah halaman mengunakan Fetch API pada Laravel</title>
</head>
<body>
    <div class="w-[800px] mx-auto mt-10">
        @foreach ($posts as $post)
            <div class="w-full mb-5 pb-3 border-b border-zinc-300">
                <a href="{{ $post->slug }}">{{ $post->title }}</a>
                <p class="text-sm text-zinc-500 mt-1">{{ $post->date }}</p>
                <p class="text-sm text-zinc-500 mt-1">{{ $post->author }} || <a href="{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <div class="w-full flex justify-end">
                    <p class="btnEdit text-blue-500 cursor-pointer" data-id="{{ $post->id }}">Edit</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="alertEdit bg-[#00000048] fixed top-0 right-0 bottom-0 left-0 hidden justify-center items-center">
        <form method="POST" action="" class="formPost bg-white w-[400px] rounded-md p-5 flex flex-col">
            @csrf
            @method('put')
            {{-- category --}}
            <label for="category" class="text-sm mb-1">Select Category</label>
            <select name="category_id" id="category" class="text-sm mb-1 border border-zinc-500 p-1 rounded-md focus:outline-none">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            {{-- title --}}
            <label for="title" class="text-sm mt-3 mb-1">Title</label>
            <input type="text" name="title" id="title" class="text-sm mb-1 border border-zinc-500 p-1 rounded-md focus:outline-none">

            {{-- slug --}}
            <label for="slug" class="text-sm mt-3 mb-1">Slug</label>
            <input type="text" name="slug" id="slug" class="text-sm mb-1 border border-zinc-500 p-1 rounded-md focus:outline-none">

            {{-- author --}}
            <label for="author" class="text-sm mt-3 mb-1">Author</label>
            <input type="text" name="author" id="author" class="text-sm mb-1 border border-zinc-500 p-1 rounded-md focus:outline-none">

            {{-- date --}}
            <label for="date" class="text-sm mt-3 mb-1">Publish Date</label>
            <input type="date" name="date" id="date" class="text-sm mb-1 border border-zinc-500 p-1 rounded-md focus:outline-none">

            <div class="w-full flex justify-end mt-5">
                <p class="btnCancel bg-red-500 mr-3 px-4 py-2 rounded-md text-white text-sm cursor-pointer">Cancel</p>
                <button type="submit" class="bg-green-500 px-4 py-2 rounded-md text-white text-sm cursor-pointer">Simpan</button>
            </div>
        </form>
    </div>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>