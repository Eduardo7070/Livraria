<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index(){
        $livrosQuery = Livro::query();
        $livrosQuery->orderBy('title', 'asc'); 
        $livros = $livrosQuery->paginate(8);
        return view('catalogo', ['livros' => $livros]);
    }

    public function detalhes($id)
    {
        $livro = Livro::findOrFail($id);
        return view('detalhes', ['livro' => $livro]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'Autor' => 'required',
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $livro = new Livro();
        $livro->title = $request->title;
        $livro->Autor = $request->Autor;
        $livro->descricao = $request->descricao;
        $livro->valor = $request->valor;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->file('image');
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('images/livros'), $imageName);
            $livro->image = 'images/livros/' . $imageName;
        }

        $livro->save();

        return redirect('/admin');
    }

    public function dashbord()
    {
        $livros = Livro::all();
        return view('dashbord', ['livros' => $livros]);
    }

    public function destroy($id)
    {
        Livro::findOrFail($id)->delete();
        session()->flash('success', 'Livro deletado com sucesso!!');
        return redirect('/dashbord');
    }

    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('editar', ['livro' => $livro]);
    }

    public function update(Request $request)
    {
        Livro::findOrFail($request->id)->update($request->all());
        session()->flash('success', 'Livro atualizado com sucesso!!');
        return redirect('/catalogo');
    }
}
?>