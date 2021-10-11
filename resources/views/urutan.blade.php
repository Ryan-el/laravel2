@extends('layouts.app')

@section('title', 'urutan')

@foreach ($numbers as $numbers)
<h1>urutan ke - {{$numbers['ke']}}</h1>
<h3>nomor ke - {{$numbers['nomor']}}</h3>
@endforeach

@section('content')

@endsection