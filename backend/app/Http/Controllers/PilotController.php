<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pilot;
use Illuminate\Support\Facades\Log;

class PilotController extends Controller

{

    /**
     * Obtiene todos los pilotos con filtros opcionales.
     * Soporta filtros por: search (nombre), team (equipo), nationality (nacionalidad)
     */
    public function index(Request $request)
    {
        try {
            $query = Pilot::query();

            // Filtro de búsqueda por nombre o apellido (case-insensitive)
            if ($request->has('search') && !empty($request->get('search'))) {
                $search = $request->get('search');
                // LIKE es más rápido que ILIKE, convierte a mayúsculas para búsqueda
                $query->whereRaw('UPPER(name) LIKE UPPER(?)', ["%{$search}%"])
                      ->orWhereRaw('UPPER(surname) LIKE UPPER(?)', ["%{$search}%"]);
            }

            // Filtro por equipo (búsqueda exacta, muy rápida)
            if ($request->has('team') && !empty($request->get('team'))) {
                $query->where('team', $request->get('team'));
            }

            // Filtro por nacionalidad (búsqueda exacta, muy rápida)
            if ($request->has('nationality') && !empty($request->get('nationality'))) {
                $query->where('nationality', $request->get('nationality'));
            }

            $pilots = $query->orderBy('id', 'asc')->get();
            return response()->json($pilots, 200);
        } catch (\Exception $th) {
            Log::error('Error fetching pilots: ' . $th->getMessage());
            return response()->json(['message' => 'Failed to fetch pilots.'], 500);
        }
    }

    public function show($id)
    {
        $pilot = Pilot::findOrFail($id);
        return response()->json($pilot, 200);
    }

    /**
     * Primero recibe los datos del piloto a crear, luego los valida y finalmente crea el piloto.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'surname' => 'required|string|max:255',
                'nationality' => 'required|string|max:255',
                'team' => 'required|string|max:255',
                'car_number' => 'required|integer|max:255',
                'birth_date' => 'required|date',
                'poles' => 'required|integer',
                'wins' => 'required|integer'
            ]);

            $pilot = Pilot::create($validatedData);
            return response()->json($pilot, 201);
        } catch (\Exception $th) {
            Log::error('Error creating pilot: ' . $th->getMessage(), ['trace' => $th->getTraceAsString()]);
            return response()->json($th, 500);
        }
    }

    /**
     * Recibe dos parámetros: $id (el ID del piloto que se va a actualizar) y $request (un objeto de solicitud HTTP que contiene los datos actualizados). 
     * Intenta encontrar un piloto con el $id dado utilizando Pilot::findOrFail($id). Si no se encuentra el piloto, lanza un error 404.
     * Si se encuentra el piloto, actualiza los datos del piloto utilizando $pilot->update($request->all()), donde $request->all() contiene todos los datos de la solicitud HTTP.
     * Si la actualización es exitosa, devuelve una respuesta JSON con los datos actualizados del piloto y un código de estado 200.
     * Si ocurre algún error durante este proceso, captura la excepción y devuelve una respuesta JSON con el mensaje de error y un código de estado 500.
     */
    public function update($id, Request $request)
    {
        try {
            $pilot = Pilot::findOrFail($id);
            $pilot->update($request->all());
            return response()->json($pilot, 200);
        } catch (\Exception $th) {
            return response()->json($th, 500);
        }
    }

    
    /**
     * Borra un piloto según su ID.
     * 
     * Primero busca al piloto con el ID dado utilizando Pilot::findOrFail($id). Si no se encuentra el piloto, lanza un error 404.
     * Si se encuentra el piloto, lo borra utilizando $pilot->delete().
     * Si la eliminación es exitosa, devuelve una respuesta JSON vacía con un código de estado 204.
     * Si ocurre algún error durante este proceso, captura la excepción y devuelve una respuesta JSON con el mensaje de error y un código de estado 500.
     */
    public function delete($id)
    {

        $pilot = Pilot::findOrFail($id);
        $pilot->delete();
        return response()->json(null, 204);
    }
}
