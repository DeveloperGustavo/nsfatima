<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'nome' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'num' => 'required',
            'bairro' => 'required',
            'uf' => 'required',
            'cidade' => 'required',

        ]);
        $people = People::create($request->all());
        return redirect()->route('home')
            ->with('people', $people);
    }

    public function viewUpdate($id){
        return view('update', ['people' => People::findOrFail($id)]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nome' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'num' => 'required',
            'bairro' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
        ]);
        People::where('id', $id)
            ->update([
                'nome' => $request->nome,
                'rg' => $request->rg,
                'cpf' => $request->cpf,
                'tel' => $request->tel,
                'cel' => $request->cel,
                'cep' => $request->cep,
                'endereco' => $request->endereco,
                'num' => $request->num,
                'bairro' => $request->bairro,
                'uf' => $request->uf,
                'cidade' => $request->cidade]);
        return redirect()->route('home');

    }

    public function delete($id){
        $delete = People::find($id);
        $delete->delete();
        return redirect()->route('home');
    }
}
