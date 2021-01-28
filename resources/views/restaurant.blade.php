@extends('layouts.app')

@section('content')
@foreach ($plat as $plat)
<!-- item card -->
<div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
    <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="https://ik.imagekit.io/q5edmtudmz/FB_IMG_15658659197157667_wOd8n5yFyXI.jpg" alt="bag">
    <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
        <div class="flex items-center">
            <h2 class="text-xl text-gray-800 font-medium mr-auto">
                <p>{{ $plat->name }}</p>
            </h2>
            <p class="text-gray-800 font-semibold tracking-tighter">
            <p>{{ $plat->price }} €</p>
            </p>
        </div>
        <p class="text-sm text-gray-700 mt-4">
            {{ $plat->description }}
        </p>
        <div class="flex items-center justify-end mt-4 top-auto">
            <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Ajouter</button>
        </div>
    </div>
</div>
@endforeach
@endsection