<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utilisateur;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password_hashed = Hash::make('Eneam123');
        Utilisateur::updateOrCreate(
            ['email' => 'maurice.comlan@uac.bj'], // critère pour vérifier si l'utilisateur existe
            [
                'nom' => 'Comlan',
                'prenom' => 'maurices',
                'sexe' => 'Masculin', // petite correction "Macsulin" -> "Masculin"
                'password' => $password_hashed
            ]
        );
    }
}
