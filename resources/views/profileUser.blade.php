@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <a href="/profileUser?informations">Mes informations</a>
        <a>|||</a>
        <a href="/profileUser?commandes">Mes commandes</a>
        @if ( Auth::user()->type == 'restaurateur' )
        <a>|||</a>
        <a href="/profileUser?restaurant">Mon restaurant</a>
        @endif
        @if ( Auth::user()->type == 'administrateur' )
        <a>|||</a>
        <a href="/profileUser?utilisateurs">Les utilisateurs</a>
        <a>|||</a>
        <a href="/profileUser?restaurantAdmin">Les restaurants</a>
        @endif
        @if (Request::has('utilisateurs') )
        @foreach ($user as $user)
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <p>{{ $user->secondName }}</p>
                    <p>{{ $user->firstName }}</p>
                    <p>{{ $user->addresse }}</p>
                    <br>
                    <a href="/userAdminModify?id={{ $user->id }}" class="btn btn-primary">
                        Modifier
                    </a>
                    <a href="/deleteUser?id={{ $user->id }}" class="btn btn-primary background-red-500">
                        Supprimer
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        @if (Request::has('restaurant') )
        <a>|||</a>
        <a href="/profileUser?addRestaurant">Ajouter un restaurant</a>
        @foreach ($restaurant as $restaurant)
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <p>{{ $restaurant->name }}</p>
                    <p>{{ $restaurant->image }}</p>
                    <p>{{ $restaurant->addresse }}</p>
                    <a href="/restaurantAdminModify?id={{ $restaurant->id }}" class="btn btn-primary">
                        Modifier
                    </a>
                    <a href="/deleteRestaurant?id={{ $restaurant->id }}" class="btn btn-primary background-red-500">
                        Supprimer
                    </a>
                    <a href="/restaurantAdmin?id={{ $restaurant->id }}" class="btn btn-primary">
                        Aperçu
                    </a>
                    <br>
                </div>
            </div>
        </div>
        <br>
        @endforeach
        @endif
        @if (Request::has('restaurantAdmin') )
        <a>|||</a>
        <a href="/profileUser?addRestaurant">Ajouter un restaurant</a>
        @foreach ($restaurantAdmin as $restaurant)
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <p>{{ $restaurant->name }}</p>
                    <p>{{ $restaurant->image }}</p>
                    <p>{{ $restaurant->addresse }}</p>
                    <a href="/restaurantAdminModify?id={{ $restaurant->id }}" class="btn btn-primary">
                        Modifier
                    </a>
                    <a href="/deleteRestaurant?id={{ $restaurant->id }}" class="btn btn-primary background-red-500">
                        Supprimer
                    </a>
                    <a href="/restaurantAdmin?id={{ $restaurant->id }}" class="btn btn-primary">
                        Aperçu
                    </a>
                    <br>
                </div>
            </div>
        </div>
        <br>
        @endforeach
        @endif
        @if (Request::has('informations'))
        <div class="flex items-center h-screen w-full justify-center">
            <div class="max-w-xs">
                <div class="bg-white shadow-xl rounded-lg py-3">
                    <div class="photo-wrapper p-2">
                        <img class="w-32 h-32 rounded-full mx-auto" src="https://cours-informatique-gratuit.fr/wp-content/uploads/2014/05/compte-utilisateur-1.png" alt="John Doe">
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{ Auth::user()->secondName }}</h3>
                        <div class="text-center text-gray-400 text-xs font-semibold">
                            <p>{{ Auth::user()->firstName }}</p>
                        </div>
                        <table class="text-xs my-3">
                            <tbody>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                                    <td class="px-2 py-2">{{ Auth::user()->adresse }}</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                                    <td class="px-2 py-2">{{ Auth::user()->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                    <td class="px-2 py-2">{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Solde</td>
                                    <td class="px-2 py-2">{{ Auth::user()->solde }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="/userModify?id={{ Auth::user()->id }}" class="btn btn-primary">
                            Modifier
                        </a>
                    </div>
                </div>
            </div>
        </div>>
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
</div>

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

@endsection