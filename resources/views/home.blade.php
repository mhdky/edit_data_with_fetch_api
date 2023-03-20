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
                <p class="text-sm text-zinc-500 mt-1">{{ $post->author }} || <a href="{{ $post->category->sluc }}">{{ $post->category->name }}</a></p>
            </div>
        @endforeach
    </div>
</body>
</html>