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
        Schema::create('groups', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // تأكد من استخدام InnoDB
            $table->id();
            $table->string("name");
            $table->string("username");
            $table->foreignId("user_id")->constrained()->onDelete('cascade');
            $table->uuid("device_id")->nullable();
            $table->foreign("device_id")->references('id')->on('devices')->onDelete('set null'); 
            $table->foreignId("contact_group_id")->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
