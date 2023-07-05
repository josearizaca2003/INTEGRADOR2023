@inject('carbon', 'Carbon\Carbon')
<x-index-layout>
    <div class="flex gap-4 justify-center mb-8">
        @foreach ($companies as $company)
            <div class="border-b-4 hover:border-b-yellow-400 font-bold">
                <a href="{{route('posts.search',$company)}}">{{$company->Sector}}</a>
            </div>
        @endforeach
    </div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
    @foreach ($jobs as $job)
{{-- //tarjetas --}}
    <a href="{{route('posts.show',$job)}}" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div class="absolute left-0 top-0 bg-indigo-600 text-white rounded-tl-lg py-1 px-2 text-sm">
            {{$job->company->Sector}}
        </div>
        <div class="flex">
            <div class=" bg-slate-50 flex items-center justify-center">
                <img src="{{Storage::url($job->image->url)}}">
            </div>

            <div class="w-80 ml-4">
                <h2 class="mt-6 text-xl font-semibold text-gray-900">{{$job->Titulo}}</h2>

            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                {{$job->Descripcion}}
            </p>
            </div>
        </div>
        <div class="text-right">
            <p class="text-xs text-gray-400">Publicado: {{ $carbon::parse($job->updated_at)->diffForHumans() }}</p>
        </div>

        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
        </svg> --}}
    </a>
    @endforeach
</div>
</x-index-layout>
