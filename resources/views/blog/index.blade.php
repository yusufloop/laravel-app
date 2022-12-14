{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}
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

    {{-- @forelse ($posts as $post) --}}
        {{-- {{ $loop->parent }} --}}
        {{-- {{ $loop->index }} --}}
        {{-- {{ $loop->iteration }} --}}
        {{-- {{ $loop->remaining }} --}}
        {{-- {{ $loop->count }} --}}
        {{-- {{ $loop->first }} --}}
        {{-- {{ $loop->last }} --}}
        {{-- hidden loop property --}}
    {{-- @empty --}}
        {{-- <p>No post have been set</p> --}}
    {{-- @endforelse --}}
    {{-- for loop with exception or error check condition --}}
{{-- </body> --}}
{{-- </html> --}}

<html>
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>
        Laravel App
    </title>
    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    />
</head>
<body class="w-full h-full bg-gray-100">
    <div class="w-4/5 mx-auto">
        <div class="text-center pt-20">
            <h1 class="text-3xl text-gray-700">
                All Articles
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="py-10 sm:py-20">
            <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
               href="">
                New Article
            </a>
        </div>
    </div>

    @foreach ($posts as $post)

 
    <div class="w-4/5 mx-auto pb-10">
        <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
            <div class="w-11/12 mx-auto pb-10">
                <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                    <a href="{{ route('blog.show',$post->id) }}">
                        {{ $post->title}}
                    </a>
                </h2>

                <p class="text-gray-900 text-lg py-8 w-full break-words">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa maiores nisi quasi tenetur voluptatem! At blanditiis dolor doloremque eaque, esse molestiae neque numquam quod repellat rerum sequi sit suscipit veritatis!
                </p>

                <span class="text-gray-500 text-sm sm:text-base">
                    Made by:
                        <a href=""
                           class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all">
                            Dary
                        </a>
                    on 13-07-2022
                </span>
            </div>
        </div>
    </div>
    @endforeach

    
</body>
</html>