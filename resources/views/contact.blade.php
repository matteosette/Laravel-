@extends('base')

@section('page_title','Contact')

@section('content')
    <h2>Contact</h2>
    <h4>Adresse: {{$adresse}}</h4>
    <h4>Tel: {{$tel}}</h4>       
    <h4>horaire: {{$horaire}} </h4>
    <h4>{!!$map!!} </h4>
@endsection 
