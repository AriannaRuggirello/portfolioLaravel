<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupera tutte le note dell'utente corrente
        $technologies = Technology::query()
            ->orderBy('created_at', 'desc')
            ->paginate();
       
        // Ritorna la vista dell'elenco delle note con le note recuperate
        return view('technology.index', ['technologies' => $technologies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Recupera tutti i progetti
        $projects = Project::all();
        // Mostra il formulario per creare una nuova tecnologia
        return view('technology.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ottiene tutti i dati inviati dal formulario
        $data = $request->all();
        // Crea una nuova tecnologia con i dati ricevuti
        $technology = Technology::create($data);
        // Reindirizza alla welcome con l'ID della nuova tecnologia
        return redirect()->route('technology.index', $technology->id)->with('message', 'Note was created');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        // Mostra la vista dei dettagli della tecnologia
        return view('technology.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        // Recupera tutti i progetti
        $projects = Project::all();
        // Mostra il formulario per modificare la tecnologia
        return view('technology.edit', compact('technology', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        // Ottiene tutti i dati inviati dal formulario
        $data = $request->all();
        // Aggiorna la tecnologia con i dati ricevuti
        $technology->update($data);
        // Reindirizza alla welcome con l'ID della tecnologia aggiornata
        return redirect()->route('technology.show', $technology->id)->with('message', 'Note was updated');;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        // Rimuove tutti i collegamenti ai progetti associati alla tecnologia
        $technology->projects()->detach();
        // Elimina la tecnologia
        $technology->delete();
        // Reindirizza alla welcome
        return redirect()->route('technology.index')->with('message', 'Note was deleted');;
    }
}
