<?php

namespace App\Http\Controllers;

use App\Models\Crucero;
use Illuminate\Http\Request;

/**
 * Class CruceroController
 * @package App\Http\Controllers
 */
class CruceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruceros = Crucero::paginate();

        return view('crucero.index', compact('cruceros'))
            ->with('i', (request()->input('page', 1) - 1) * $cruceros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crucero = new Crucero();
        return view('crucero.create', compact('crucero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Crucero::$rules);

        $crucero = Crucero::create($request->all());

        return redirect()->route('cruceros.index')
            ->with('success', 'El Crucero se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crucero = Crucero::find($id);

        return view('crucero.show', compact('crucero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crucero = Crucero::find($id);

        return view('crucero.edit', compact('crucero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Crucero $crucero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crucero $crucero)
    {
        request()->validate(Crucero::$rules);

        $crucero->update($request->all());

        return redirect()->route('cruceros.index')
            ->with('success', 'El Crucero se ha actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $crucero = Crucero::find($id)->delete();

        return redirect()->route('cruceros.index')
            ->with('success', 'El Crucero se ha borrado');
    }

    //Parte pública
    public function ofertas()
    {
        $crucero = Crucero::all();

        return view("web.index", ["crucero" => $crucero]);
    }
}
