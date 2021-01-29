@extends('layouts.app')

@section('content')
<div class="flex items-center justify-end mt-4 top-auto">
    <a class="bg-red-500 text-blue-600 px-2 py-2 rounded-md mr-2" href="/undoCommande">Annuler la commande</a>
</div>
@foreach ($plat as $plat)
<!-- item card -->
<div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
    <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="{{ $plat->image }}" alt="bag">
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
            <a class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2" href="/newPlatCommande?id={{ $plat->id }}">Ajouter</a>
        </div>
    </div>
</div>
@endforeach
@endsection