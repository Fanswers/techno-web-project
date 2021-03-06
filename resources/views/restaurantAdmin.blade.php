@extends('layouts.app')

@section('content')
<div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
    <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="{{$monRestaurant->image}}" alt="bag">
    <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
        <div class="flex items-center">
            <h2 class="text-xl text-gray-800 font-medium mr-auto">
                <p>{{$monRestaurant->name}}</p>
            </h2>
            <p class="text-gray-800 font-semibold tracking-tighter">
            <p>{{$monRestaurant->addresse}}</p>
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card rounded-none">
                <div class="card-header">{{ __('Ajouter un plat') }}</div>

                <div class="card-body">
                    <form method="POST" action="/new_plat?id={{$monRestaurant->id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('adresse') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($plat as $plat)
<!-- item card -->
<div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
    <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="{{ $plat->image}}" alt="bag">
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
            <a class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline" href="/deletePlat?id={{ $plat->id }}">Delete</a>
            <a class="bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2" href="/platAdmin?id={{ $plat->id }}">Edit</a>
        </div>
    </div>
</div>
@endforeach
@endsection