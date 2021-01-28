@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <a href="/profileUser?informations">Mes informations</a>
        <a>|||</a>
        <a href="/profileUser?commandes">Mes commandes</a>
        <a>|||</a>
        @if ( Auth::user()->type == 'restaurateur' )
        <a href="/profileUser?restaurant">Mon restaurant</a>
        @endif
        @if (Request::has('restaurant') )
        <a>|||</a>
        <a href="/profileUser?addRestaurant">Ajouter un restaurant</a>
        @foreach ($restaurant as $restaurant)
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-body">
                <p>{{ $restaurant->name }}</p>
                <p>{{ $restaurant->image }}</p>
                <p>{{ $restaurant->addresse }}</p>
                <a href="/profileUser?modifierRestaurant?id={{ $restaurant->id }}" class="btn btn-primary">
                    Modifier
                </a>
                <a href="/restaurantAdmin?id={{ $restaurant->id }}" class="btn btn-primary">
                    Aperçu
                </a>
                <br>
            </div>
        </div>
        <br>
        @endforeach
        @endif
        @if (Request::has('informations'))
        <div class="card">
            <div class="card-body">
                <li class="nav-item">
                    <p>{{ Auth::user()->secondName }}</p>
                    <p>{{ Auth::user()->firstName }}</p>
                    <p>{{ Auth::user()->email }}</p>
                    <p>{{ Auth::user()->adresse }}</p>
                    <p>{{ Auth::user()->phone }}</p>
                    <p>{{ Auth::user()->solde }}</p>
                </li>
            </div>
        </div>
        @endif
        @if (Request::has('commandes'))
        <div class="card">
            <div class="card-body">
                <li class="nav-item">
                    <p>commande 1</p>
                    <p>commande 2</p>
                    <p>commande 3</p>
                </li>
            </div>
        </div>
        @endif
    </div>
</div>





{{ Auth::user()->secondName }}



@if (Request::has('addRestaurant'))
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card rounded-none">
                        <div class="card-header">{{ __('Add restaurant') }}</div>

                        <div class="card-body">
                            <form method="POST" action="/profileUser">
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
                                    <label for="addresse" class="col-md-4 col-form-label text-md-right">{{ __('Addresse') }}</label>

                                    <div class="col-md-6">
                                        <input id="addresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="addresse" value="{{ old('addresse') }}" required autocomplete="addresse" autofocus>

                                        @error('addresse')
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
    </div>
</div>
@endif

@if (Request::has('modifierRestaurant?id'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card rounded-none">
                <div class="card-header">{{ __('Modifier le restaurant') }}</div>
                <div class="card-body">
                    <form method="POST" action="/modify_restaurant">
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
                            <label for="addresse" class="col-md-4 col-form-label text-md-right">{{ __('Addresse') }}</label>

                            <div class="col-md-6">
                                <input id="addresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="addresse" value="{{ old('addresse') }}" required autocomplete="addresse" autofocus>

                                @error('addresse')
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection