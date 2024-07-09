@props(['post'])

<div
    {{ $attributes->merge(['class' => 'flex  bg-white rounded-lg mb-2 overflow-hidden shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 cursor-pointer']) }}>
    <div class="w-4/5 p-6 ">
        <div class="headcontent ">
            <div class="py-2 font-semibold">
                <i class="fa-solid fa-user "></i>
                {{ $post->user->name }}
            </div>
            <div class="heading">
                <h2 class="text-2xl font-bold mb-2">{{ ($post->Title) }}</h2>
              </div>
            <div class="strcontent">
                <p class="text-gray-700 mb-4">{{ Str::limit($post->content, 100, '...') }}</p>
            </div>
        </div>

        <div class="flex items-center justify-between ">
            <div class="flex flex-row space-x-5">
                <div>

                    <p class="text text-sm text-gray-600">
                        {{-- {{ $post->publication_date->format('F j, Y') }} --}}
                        {{ $post->time_difference }}
                    </p>
                </div>
                <div class="">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <span> 22.5k </span>
                </div>
                <div>
                    <i class="fa-solid fa-comment"></i>
                    <span> 80 </span>
                </div>

            </div>

            <div class="">
                
                <div class="save ">
                    <i class="fa-regular fa-bookmark"></i>
                </div>
            </div>



        </div>
    </div>

    <div class="flex justify-center items-center p-3">
        <div class="w-32 h-32 sm:w-32 sm:h-32 md:w-48 md:h-48 ">
            <img src="{{ $post->image ? $post->image : asset('/imgs/default.png') }}" alt="{{ $post->title }}"
                class="rounded w-full h-full object-cover">
        </div>
    </div>


</div>
