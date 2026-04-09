@csrf

<label for="nome">Nome do Aluno</label>
<input
    type="text"
    id="nome"
    name="nome"
    value="{{ old('nome', $aluno->nome ?? '') }}"
    required
>

<label for="email">E-mail</label>
<input
    type="email"
    id="email"
    name="email"
    value="{{ old('email', $aluno->email ?? '') }}"
    required
>

<label for="cpf">CPF</label>
<input
    type="text"
    id="cpf"
    name="cpf"
    value="{{ old('cpf', $aluno->cpf ?? '') }}"
    required
>

<button type="submit" class="btn">{{ $buttonText ?? 'Salvar' }}</button>
<a href="{{ route('alunos.index') }}" style="margin-left: 8px;">Cancelar</a>