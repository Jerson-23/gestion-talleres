<?php

namespace App\Http\Controllers;

use App\Models\NivelDificultade;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\NivelDificultadeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NivelDificultadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $nivelDificultades = NivelDificultade::paginate();

        return view('nivel-dificultade.index', compact('nivelDificultades'))
            ->with('i', ($request->input('page', 1) - 1) * $nivelDificultades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $nivelDificultade = new NivelDificultade();

        return view('nivel-dificultade.create', compact('nivelDificultade'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NivelDificultadeRequest $request): RedirectResponse
    {
        NivelDificultade::create($request->validated());

        return Redirect::route('nivel-dificultades.index')
            ->with('success', 'NivelDificultade created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $nivelDificultade = NivelDificultade::find($id);

        return view('nivel-dificultade.show', compact('nivelDificultade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $nivelDificultade = NivelDificultade::find($id);

        return view('nivel-dificultade.edit', compact('nivelDificultade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NivelDificultadeRequest $request, NivelDificultade $nivelDificultade): RedirectResponse
    {
        $nivelDificultade->update($request->validated());

        return Redirect::route('nivel-dificultades.index')
            ->with('success', 'NivelDificultade updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        NivelDificultade::find($id)->delete();

        return Redirect::route('nivel-dificultades.index')
            ->with('success', 'NivelDificultade deleted successfully');
    }
}
