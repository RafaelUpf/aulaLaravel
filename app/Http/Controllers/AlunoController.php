<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        //
        $alunos = Aluno::query()
            ->latest()
            ->get();
        return view("alunos.index", compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            $dados = $request->validate([
                'nome' => ['required','string','max:255'],
                'email' => ['required','string'],
                'cpf' => ['required','string'],
            ]); #validade serve para validar os campos que estão vindo do formulario

            Aluno::create($dados);
            #Aluno = MODEL
            return redirect()
            ->route('alunos.index')
            ->with('success','Aluno Criado com sucesso');

        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        //
        return view ('alunos.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aluno $aluno)
        {
            $dados = $request->validate([
                'nome' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string'],
                'cpf' => ['required', 'string'],
            ]);

            // Atualiza o objeto com os dados validados
            $aluno->update($dados);

            return redirect()
                ->route('alunos.index')
                ->with('success', 'Aluno atualizado com sucesso!');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
        {
            // Deleta o registro do banco de dados
            $aluno->delete();

            return redirect()
                ->route('alunos.index')
                ->with('success', 'Aluno excluído com sucesso!');
        }
}
