@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Judul Artikel : {{$artikel->judul}}</h3>
        <p>Slug : {{$artikel->slug}} </p>
        <p>{{$artikel->isi}}</p>
        <button class="btn btn-success">{{$artikel->tag}}</button>
        
        
    </div>
@endsection