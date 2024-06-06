<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Models\Technology;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Recupera tutti i progetti
         $projects = Project::all();
         // Recupera tutte le tecnologie
         $technologies = Technology::all();
         // Ritorna la vista della dashboard con i progetti e le tecnologie
         return view('dashboard', compact('projects', 'technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          // Recupera tutti i progetti
          $projects = Project::all();
          // Recupera tutti i tipi
          $types=Type::all();
          // Recupera tutte le tecnologie
          $technologies=Technology::all();
  
          // Ritorna la vista per creare un nuovo progetto con i progetti, i tipi e le tecnologie
          return view('project.create',compact('projects','types','technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ottiene tutti i dati inviati dal formulario
        $data = $request->all();

        // Salva l'immagine nel filesystem e ottiene il percorso
        $img_path = Storage::put("uploads", $data["image"]);
        $data["image"] = $img_path;

        // Crea un nuovo progetto con i dati inviati
        $project= Project::create($data);

        // Aggiunge le tecnologie associate al progetto
        $project->technologies()->attach($data['technologies']);

        // Reindirizza alla dashboard
        return redirect()->route('dashboard', $project->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
            // Recupera le tecnologie associate al progetto
            $technologies = $project->technologies;
            // Recupera i tipi associati al progetto
            $types = $project->types;
            // Ritorna la vista dei dettagli del progetto con il progetto, le tecnologie e i tipi
            return view('project.show', compact('project', 'technologies', 'types'));
    }

   /**
 * Show the form for editing the specified resource.
 */
public function edit(Project $project)
{
    // Recupera tutti i tipi
    $types = Type::all();
    // Recupera tutte le tecnologie
    $technologies = Technology::all();
    // Ritorna la vista per modificare il progetto con il progetto, i tipi e le tecnologie
    return view('project.edit', compact('project', 'types', 'technologies'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, Project $project)
{
    // Ottiene tutti i dati inviati dal formulario
    $data = $request->all();
    // Aggiorna le tecnologie associate al progetto
    $project->technologies()->sync(
        array_key_exists('technologies', $data)
            ? $data['technologies']
            : []
    );
    // Carica e sostituisce l'immagine se è stata modificata
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('uploads', 'public');
        $data["image"] = $path;
    }
    // Aggiorna il progetto con i dati inviati
    $project->update($data);
    // Reindirizza alla dashboard
    return redirect()->route('project.show', $project->id);
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(Project $project)
{
    // Rimuove le tecnologie associate al progetto
    $project->technologies()->detach();
    // Elimina il progetto
    $project->delete();
    // Reindirizza alla dashboard
    return redirect()->route('dashboard');
}

}
