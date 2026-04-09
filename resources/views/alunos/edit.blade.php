@extends('layout.app')

@section('title','Editar curso Curso')

@section('content')
    <h1> Editar alunos</h1>
    
    <form action="{{ route('alunos.update', $aluno) }}" method="POST">
        @csrf
        @method('PUT')
        @include('alunos._form', ['buttonText' => 'salvar'])

    </form>
@endsection