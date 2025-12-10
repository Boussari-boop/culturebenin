<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Garder si vous utilisez DB::raw

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            // ✅ CORRECTION APPLIQUÉE : Suppression de ->after('mot_de_passe')
            $table->string('sexe', 10);

            $table->date('date_naissance')->nullable();

            // Utiliser ->useCurrent() si vous êtes sur une version moderne de Laravel
            // Sinon, l'utilisation de DB::raw() est conservée
            $table->date('date_inscription')->useCurrent();

            $table->enum('statut', ['actif', 'inactif', 'suspendu'])->default('actif');
            $table->string('photo')->nullable();

            // Clés étrangères
            $table->foreignId('id_role')->on('roles')->nullable()->onDelete('cascade');

            $table->foreignId('id_langue')->on('langues')->nullable()->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
