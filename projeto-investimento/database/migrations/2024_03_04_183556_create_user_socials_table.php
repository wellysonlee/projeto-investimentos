<?php

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
        Schema::create('user_socials', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unsined();
            $table->string('social_network');
            $table->string('social_id');
            $table->string('social_email');
            $table->string('social_avatar');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('user_email')->references('email')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_socials', function (Blueprint $table) {
            $table->dropForeign('user_socials_user_id_foreign');
            $table->dropForeign('user_socials_social_email_foreign');
        });
        Schema::dropIfExists('user_socials');
    }
};
