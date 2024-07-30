

<div class="relative inline-block text-left">
    <button id="{{ $id }}" class="inline-flex justify-center w-full rounded-full border border-gray-300 shadow-sm px-3 py-3 bg-white text-sm font-medium text-gray-700 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="button">
        {!! $trigger !!}
    </button>
    <ul id="{{ $id }}-menu" class="hidden origin-top-right  absolute  lg:right-0 z-50   mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
        {{ $slot }}
    </ul>
</div>

{{-- @push('scripts') --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let button = document.getElementById('{{ $id }}'); 
         
            let dropdownMenu = document.getElementById('{{ $id }}-menu');
            button.addEventListener('click', function(event) {
               event.stopPropagation();
                dropdownMenu.classList.toggle('hidden');
            });

            document.addEventListener('click', function(event){
                if(!dropdownMenu.classList.contains('hidden')){
                    dropdownMenu.classList.add('hidden');
                }
            })
            dropdownMenu.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });
    </script>
{{-- @endpush --}}