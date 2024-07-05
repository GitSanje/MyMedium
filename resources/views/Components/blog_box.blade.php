@props(['post'])

<div {{ $attributes->merge(['class' => 'flex  bg-white rounded-lg mb-2 overflow-hidden shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1']) }}>
    <div class="w-4/5 p-6">
        <h2 class="text-xl font-semibold mb-2">{{ strtoupper($post->Title) }}</h2>
        <div class="py-2">
            <i class="fa-solid fa-user"></i>
            {{ $post->user->name }}
        </div>
        <p class="text-gray-700 mb-4">{{ Str::limit($post->content, 100, '...') }}</p>
        <div class="flex items-center justify-between">
            <p class="text text-sm text-gray-600">{{ $post->publication_date->format('F j, Y') }}</p>
        </div>
    </div>
    <div class="w-1/5 d-flex justify-center">
        <img src="{{ $post->image ? $post->image : asset('/imgs/default.png') }}" alt="{{ $post->title }}" class="rounded-t-lg">
    </div>
</div>
