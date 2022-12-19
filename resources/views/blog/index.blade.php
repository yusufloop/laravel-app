<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{ //dump($posts) }} --}}
    {{-- {{ //$posts->title }} --}}

    {{-- @if (count($posts) < 100)
        <h1>
            {{ dd($posts)}}
        </h1>
    @elseif (count($posts) === 202)
        <h1>
            You have exactly 202 post
        </h1>
    @else
        <h1>
            No post
        </h1>
    @endif --}}
    {{-- eg if elseif else --}}

    {{-- @unless ($posts) 
        <h1>
            Post have been added
        </h1>
    @endunless --}}
        {{-- inverse of if statement eg: if (! $posts) --}}

    @forelse ($posts as $post)
        {{-- {{ $loop->parent }} --}}
        {{-- {{ $loop->index }} --}}
        {{ $loop->iteration }}
        {{-- {{ $loop->remaining }} --}}
        {{-- {{ $loop->count }} --}}
        {{-- {{ $loop->first }} --}}
        {{-- {{ $loop->last }} --}}
        {{-- hidden loop property --}}
    @empty
        <p>No post have been set</p>
    @endforelse
    {{-- for loop with exception or error check condition --}}
</body>
</html>