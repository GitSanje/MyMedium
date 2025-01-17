<?php

use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('PostId');
            $table->string('Title');
            $table->longText('content');
            $table->string('slug');
            $table->string('category');
            $table->string('tags');
            $table->string('image')->nullable();
            //$table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(User::class);
            $table->timestamp('publication_date')->nullable();
            $table->timestamps();
            $table->index('publication_date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
