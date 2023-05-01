<?php

use App\Models\Position;
use App\Models\Role;
use App\Models\School;
use App\Models\State;
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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string("dui")->unique();
            $table->string("name");
            $table->foreignIdFor(State::class)->constrained();
            $table->foreignIdFor(School::class)->constrained();
            $table->foreignIdFor(Role::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
