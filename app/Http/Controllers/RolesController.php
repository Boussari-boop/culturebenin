<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect; // Utilisé pour les redirections
use Illuminate\Http\RedirectResponse;    // Pour le type hinting

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     * Affiche la liste des rôles.
     */
    public function index(): View
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }
    
    // La méthode 'create' est correcte telle quelle si elle ne fait que retourner la vue.

    /**
     * Store a newly created resource in storage.
     * Enregistre un nouveau rôle.
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Validation des données.
        // Assurez-vous que le champ de formulaire est 'nom_role' et la colonne BDD est 'nom'.
        $validatedData = $request->validate([
            'nom_role' => 'required|string|max:100|unique:roles,nom',
        ]);

        // 2. Création du rôle avec mapping explicite
        Role::create([
            'nom' => $validatedData['nom_role'],
        ]);

        // 3. Redirection avec message de succès
        return Redirect::route('roles.index')->with('success', 'Le rôle a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     * Affiche les détails d'un rôle. (Optionnel pour les rôles simples)
     */
    public function show(Role $role): View
    {
        // Utilisation du Model Binding: Laravel trouve le rôle par ID et l'injecte.
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     * Affiche le formulaire d'édition.
     */
    public function edit(Role $role): View
    {
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     * Met à jour le rôle.
     */
    public function update(Request $request, Role $role): RedirectResponse
    {
        // 1. Validation des données (ignorer l'unicité pour le rôle actuel)
        $validatedData = $request->validate([
            'nom_role' => 'required|string|max:100|unique:roles,nom,' . $role->id,
        ]);
        
        // 2. Mise à jour du rôle avec mapping explicite
        $role->update([
            'nom' => $validatedData['nom_role'],
        ]);

        // 3. Redirection avec message de succès
        return Redirect::route('roles.index')->with('success', 'Le rôle a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     * Supprime le rôle.
     */
    public function destroy(Role $role): RedirectResponse
    {
        try {
            $role->delete();
            $message = 'Le rôle a été supprimé avec succès.';
            $status = 'success';
        } catch (\Exception $e) {
            // Gérer les erreurs de suppression (ex: contrainte de clé étrangère)
            $message = 'Impossible de supprimer le rôle. Il est probablement utilisé par des utilisateurs.';
            $status = 'error';
        }

        return Redirect::route('roles.index')->with($status, $message);
    }
}
