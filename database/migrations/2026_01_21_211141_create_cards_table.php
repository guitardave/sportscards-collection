<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Player;
use App\Models\CardSet;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Player::class)->constrained();
            $table->foreignIdFor(CardSet::class)->constrained();

            $table->string('subset_info')->nullable();
            $table->string('card_num')->nullable();
            $table->string('condition')->nullable();
            $table->boolean('is_graded')->default(false);
            $table->string('image_name')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
