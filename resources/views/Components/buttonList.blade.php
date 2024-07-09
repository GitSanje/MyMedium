
@props(['list', 'heading'])


<div class="side_content bg-white rounded px-5 py-2">

    <h4 class="text-xl font-semibold text-slate-800 mx-2 pb-2">{{$heading}}</h4>
 
     <div class=" pb-3">  
        @foreach ($list as $value)
        <x-button >
            {{$value}}
        </x-button>
        @endforeach
     </div> 
</div>
