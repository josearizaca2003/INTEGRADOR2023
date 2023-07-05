@inject('carbon', 'Carbon\Carbon')
<x-index-layout>
{{-- {{$job}} --}}
<div>
    <div class="border-y-2 border-indigo-600 py-3">
        <h3>{{$job->company->Sector}}</h3>
    </div>
    <div>
        <h1 class="text-2xl font-bold py-6">{{$job->Titulo}}</h1>
    </div>
    <div class="grid grid-cols-3 gap-6 w-full">
        <div class="col-span-2">
            <div>
                <img class="w-full" src="{{Storage::url($job->image->url)}}">
            </div>
            <div>
                <p class="font-bold border-y-2 border-indigo-600 border-dotted py-3 my-4">Publicado el {{$job->created_at}}</p>
                <p class="text-sm">{{$job->Descripcion}}</p>
            </div>
        </div>
        <div>
            <h3 class="bg-indigo-600 text-white p-2">Ultimas publicaciones</h3>
            @foreach ($ultimas as $item)
            <a href="{{ route('posts.show',$item) }}">
            <div class="grid grid-cols-2 my-4 border-b-2 border-indigo-600 pb-4">
                <div>
                    <img src="{{Storage::url($item->image->url)}}" alt="">
                </div>
                <div class="ml-4">
                    <h4>{{$item->Titulo}}</h4>
                    <p class="text-xs text-gray-400 mr-4">Publicado: {{ $carbon::parse($item->updated_at)->diffForHumans() }}</p>
                </div>

            </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
</x-index-layout>
