<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    protected $model;

    public function __construct(Support $support)
    {
        $this->model = $support;
        
    }
    
    /**
     * Display a listing of the resource.   
     */
    public function index(
        Support $support
    )
    {
        $supports = $support->all();

        return view("admin.supports.index", compact("supports"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.supports.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupportRequest $request)
    {
        $data = $request->validated();
        $data['status'] = 'A';
        
        $this->model->create($data);

        return redirect()->route('supports.index')->with('success','Cadastro realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string|int $id)
    {
        if(!$support = $this->model->find($id)){
            return redirect()->back()->with('error','Registro não encontrado.');
        }

        return view('admin.supports.show', compact('support'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string|int $id)
    {
        if(!$support = $this->model->where('id', $id)->first()){
            return redirect()->back()->with('error','Registro não encontrado.');
            }

        return view('admin.supports.edit', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSupportRequest $request, string $id)
    {
        if(!$support = $this->model->find($id)){
            return redirect()->back()->with('error','Registro não encontrado.');
        }

        $support->update($request->validated());

        return redirect()->route('supports.index')->with('success','Registro atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!$support = $this->model->find($id)){
            return redirect()->back()->with('error','Registro não encontrado.');
        }

        $support->delete();

        return redirect()->route('supports.index')->with('success','Registro deletado com sucesso.');
    }
}
