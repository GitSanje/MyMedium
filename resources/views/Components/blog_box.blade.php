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
            <p class="text text-sm text-gray-600">
                {{-- {{ $post->publication_date->format('F j, Y') }} --}}
                {{ $post->time_difference }}
            
            </p>
        </div>
    </div>
    <div class="flex justify-center items-center p-3 ">
        <div class="w-32 h-32 sm:w-32 sm:h-32 md:w-48 md:h-48 ">
            <img src="{{ $post->image ? $post->image : asset('/imgs/default.png') }}" alt="{{ $post->title }}" class="rounded w-full h-full object-cover">
        </div>
    </div>
    
    
</div>
