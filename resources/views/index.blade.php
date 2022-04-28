@extends('layouts.base')

@section('title', 'Главная страница')

@section('content')
@foreach ($products as $product)
    <div class="border b-4">{{$product->Name}} | {{$product->Price}} руб.</div>
@endforeach
@endsection
