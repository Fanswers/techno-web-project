@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Les restaurants du moment !</div>
                <div class="card-body">
                    @foreach ($restaurant as $restaurant)
                    <!-- item card -->
                    <div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
                        <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="{{ $restaurant->image }}" alt="bag">
                        <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
                            <div class="flex items-center">
                                <h2 class="text-xl text-gray-800 font-medium mr-auto">
                                    {{ $restaurant->name }}
                                </h2>
                            </div>
                            <p class="text-gray-800 font-semibold tracking-tighter">
                                {{ $restaurant->addresse }}
                            </p>
                            <div class="flex items-center justify-end mt-4 top-auto">
                                <a class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2" href="/restaurant?id={{ $restaurant->id }}">Commander</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection