<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cursos = Curso::query()
            ->latest()
            ->get();
        return view("cursos.index", compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cursos.create");
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required','string','max:255'],
            'semestres' => ['required','string'],
            'descricao' => ['required','string'],
        ]); #validade serve para validar os campos que estão vindo do formulario

        Curso::create($dados);
        #Curso = MODEL
        return redirect()
        ->route('cursos.index')
        ->with('success','Curso Criado com sucesso');

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
    public function edit(Curso $curso)
    {
        //
        return view ('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, Curso $curso)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'semestres' => ['required', 'string'],
            'descricao' => ['required', 'string'],
        ]);

        // Atualiza o objeto com os dados validados
        $curso->update($dados);

        return redirect()
            ->route('cursos.index')
            ->with('success', 'Curso atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
        {
            // Deleta o registro do banco de dados
            $curso->delete();

            return redirect()
                ->route('cursos.index')
                ->with('success', 'Aluno excluído com sucesso!');
        }
}
