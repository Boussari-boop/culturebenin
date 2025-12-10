<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contenus', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('texte');
            $table->date('date_creation')->useCurrent();
            $table->enum('statut', ['actif', 'inactif'])->default('actif');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->date('date_validation')->useCurrent();

            $table->foreignId('id_region')->on('regions')->onDelete('cascade');
            $table->foreignId('id_langue')->on('langues')->onDelete('cascade');

            $table->foreignId('id_moderateur')->on('utilisateurs')->onDelete('set null');

            $table->foreignId('id_type_contenu')->on('type_contenus')->onDelete('cascade');
            $table->foreignId('id_auteur')->on('utilisateurs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_contenus');
    }
};
