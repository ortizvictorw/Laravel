<?php

namespace App\Http\Controllers;

/* use Illuminate\Support\Facades\DB; */

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProyectRequest;

class ProjectController extends Controller
{


    /* Metodo Constructor */

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           /*  $proyects = Proyect::latest()->paginate();
            return view ('portafolio', compact('proyects')); */

            return view ('projects.index', [

                'projects'=> Project::latest()->paginate()

                ]);

    }

    public function show ($id)
    {
        $project = Project::findOrFail($id);

        return view('projects.show', [
            'project' => $project
        ]);
    }


    public function create()
    {
        return view('projects.create',[
            'project' => new Project
        ]);
    }

    public function store(SaveProyectRequest $request)
    {

         Project::create($request->validated());//[tile,url,description,token]

        return redirect()->route('projects.index')->with('status','El Proyecto fue creado con exito');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('projects.edit', [
            'project' => $project
        ]);

    }

    public function update(Project $project, SaveProyectRequest $request)
    {
        /* SaveProyectRequest trae en su request las reglas de validacion */
         $project->update($request->validated());

         return redirect()->route('projects.show', $project)->with('status','El Proyecto fue Actualizado con exito');
    }

    public function destroy(Project $project)
    {

         $project->delete();

         return redirect()->route('projects.index')->with('status','El Proyecto fue Eliminado con exito');

    }


}
