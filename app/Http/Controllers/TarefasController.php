<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    public function index()
    {
        $listaDeTarefas = Tarefa::all();
        return view('todo.index', compact('listaDeTarefas'));
    }

    public function store()
    {
        $tarefa = new Tarefa();

        $novaTarefa = request()->get('tarefa');

        if ($novaTarefa != "") {
            $tarefa->descricao = $novaTarefa;
            $tarefa->save();
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $tarefa = Tarefa::find($id);

        $listaDeTarefas = Tarefa::all();
        return view('todo.index', compact('listaDeTarefas', 'tarefa'));
    }

    public function update($id)
    {
        $tarefa = Tarefa::find($id);

        $listaDeTarefas = Tarefa::all();
        $tarefa->descricao = request()->get('tarefa');
        $tarefa->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();

        return redirect()->back();
    }

}
