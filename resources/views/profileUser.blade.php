@extends('layouts.app')
@section('content')
<a href="/profileUser?informations">Mes informations</a>
<a href="/profileUser?commandes">Mes commandes</a>

@if (Request::has('informations'))
<li class="nav-item">
    <p>{{ Auth::user()->secondName }}</p>
    <p>{{ Auth::user()->firstName }}</p>
    <p>{{ Auth::user()->email }}</p>
    <p>{{ Auth::user()->adresse }}</p>
    <p>{{ Auth::user()->phone }}</p>
    <p>{{ Auth::user()->solde }}</p>
</li>
@endif

@if (Request::has('commandes'))
<li class="nav-item">
    <p>commande 1</p>
    <p>commande 2</p>
    <p>commande 3</p>
</li>
@endif
@foreach ($user as $user)
{{ $user->secondName }}
@endforeach
{{ Auth::user()->secondName }}
@endsection