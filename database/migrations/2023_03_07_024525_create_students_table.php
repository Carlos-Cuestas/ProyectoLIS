<?php

use App\Models\Grade;
use App\Models\School;
use App\Models\Section;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("carnet")->unique();
            $table->string("name");
            $table->string("gender");
            $table->softDeletes();
            $table->foreignIdFor(Section::class)->constrained();
            $table->foreignIdFor(Grade::class)->constrained();
            $table->foreignIdFor(School::class)->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
