<?php

namespace App\Http\Controllers\Admin;

use App\DTOs\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function __construct(
        protected SupportService $service
    ) {}
    
    /**
     * Display a listing of the resource.   
     */
    public function index(Request $request)
    {
        $supports = $this->service->getAll($request->filter);

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
        $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return redirect()->route('supports.index')->with('success','Cadastro realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!$support = $this->service->findOne($id)){
            return redirect()->back()->with('error','Registro não encontrado.');
        }

        return view('admin.supports.show', compact('support'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!$support = $this->service->findOne($id)){
            return redirect()->back()->with('error','Registro não encontrado.');
        }

        return view('admin.supports.edit', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSupportRequest $request, string $id)
    {
        if(!$this->service->update(UpdateSupportDTO::makeFromRequest($request))){
            return redirect()->back()->with('error','Registro não encontrado.');
        }

        return redirect()->route('supports.index')->with('success','Registro atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->service->delete($id);

        return redirect()->route('supports.index')->with('success','Registro deletado com sucesso.');
    }
}
