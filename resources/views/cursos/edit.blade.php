@extends('layout.app')

@section('title','Editar curso Curso')

@section('content')
    <h1> Editar Curso</h1>
    
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')
        @include('cursos._form', ['buttonText' => 'salvar'])

    </form>
@endsection