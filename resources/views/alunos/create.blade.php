@extends('layout.app')

@section('title', 'Novo Aluno')

@section('content')
    <h1>Novo Aluno</h1>
    
    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf 
        @include('alunos._form', ['buttonText' => 'Cadastrar Aluno'])
    </form>
@endsection