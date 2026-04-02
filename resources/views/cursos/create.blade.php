@extends('layout.app')

@section('title','Novo Curso')

@section('content')
    <h1> Novo Curso</h1>
    
    <form action="{{ route('cursos.store') }}" method="POST">
        @include('cursos._form', ['buttonText' => 'Criar curso'])

    </form>