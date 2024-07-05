<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <x-navbar />

    <!-- blogs boxes -->
    <div class="container mx-auto py-8 px-1   ">
        @if (request()->has('search') && !empty(request('search')))
            <h1 class="text-3xl font-semibold text-start px-1 lg:px-4 mb-2">
                <span class="text-slate-500">Results for </span>
                <span class="">{{ request('search') }}</span>
            </h1>
        @endif

        <div class="flex flex-wrap">
            <div class="w-full lg:w-2/3 ">
                @unless (count($posts) == 0)
                    <div>
                        @foreach ($posts as $post)
                            <x-blog_box :post="$post" />
                        @endforeach
                    </div>
                @else
                    <div class="border border-gray-300 ">
                        <h4 class="font-semibold">No posts found</h4>
                    </div>
                @endunless
            </div>
            <div class="hidden lg:block lg:w-1/3 ">
                Hello
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $posts->onEachSide(5)->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <footer
        class="left-0 w-full flex items-center justify-center font-bold text-black h-24 mt-24 opacity-90 border-t border-gray-300 bg-slate-300">
        <p class="text-center w-full md:w-auto ml-0 md:ml-2">Copyright &copy; 2024, All Rights reserved</p>
    </footer>

    {{-- @vite('resources/js/app.js') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
