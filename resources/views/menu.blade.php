@extends('base')

@section('page_title','Accueil')

@section('content')
   
<h1>menu</h1>
    </ul>
    @foreach ($categories as $categorie)
        <li>{{ $categorie->nom }} ({{ $categorie-> description}})</li>
        @endforeach
        </ul>
    @endsection 
