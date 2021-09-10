@extends('layouts.master')
@section('title', 'gans project')
@section('content')


    <h1>selamat datang di blog</h1>
    <h2> {{ $blog }} </h2>
    
    @foreach ($users as $user)
    <li> {{ $user->username }} </li>   
    @endforeach

    @if (count($users) > 5)
    <p> usernya lebih dari lima </p>   
    @else
    <p> usernya tidak lebih dari lima</p>
    @endif
@endsection