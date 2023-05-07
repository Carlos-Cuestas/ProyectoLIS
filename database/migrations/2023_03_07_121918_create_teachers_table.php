<?php

use App\Models\Grade;
use App\Models\Section;
use App\Models\Staff;
use App\Models\Subject;
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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Staff::class)->constrained();
            $table->foreignIdFor(Grade::class)->constrained();
            $table->foreignIdFor(Subject::class)->constrained();
            $table->foreignIdFor(Section::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};