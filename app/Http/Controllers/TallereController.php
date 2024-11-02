<?php

namespace App\Http\Controllers;

use App\Models\Tallere;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TallereRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TallereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $talleres = Tallere::paginate();

        return view('tallere.index', compact('talleres'))
            ->with('i', ($request->input('page', 1) - 1) * $talleres->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tallere = new Tallere();

        return view('tallere.create', compact('tallere'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TallereRequest $request): RedirectResponse
    {
        Tallere::create($request->validated());

        return Redirect::route('talleres.index')
            ->with('success', 'Tallere created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tallere = Tallere::find($id);

        return view('tallere.show', compact('tallere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tallere = Tallere::find($id);

        return view('tallere.edit', compact('tallere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TallereRequest $request, Tallere $tallere): RedirectResponse
    {
        $tallere->update($request->validated());

        return Redirect::route('talleres.index')
            ->with('success', 'Tallere updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Tallere::find($id)->delete();

        return Redirect::route('talleres.index')
            ->with('success', 'Tallere deleted successfully');
    }
}
