<?php

use App\Enums\BlogStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->text('excerpt');
            $table->longText('content');
            $table->enum('status', BlogStatus::values())->default(BlogStatus::ACTIVE)->comment(BlogStatus::comment());
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
