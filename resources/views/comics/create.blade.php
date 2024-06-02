@extends('layouts.app')
@section('title', 'Crea un nuovo fumetto')
@section('content') 
<h1 class="text-white text-center">Crea un nuovo fumetto</h1>
<section class="container p-5">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label"></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"></label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descrizone">
        </div>