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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('使用者名稱');
            $table->string('email')->unique()->comment('信箱');
            $table->timestamp('email_verified_at')->nullable()->comment('信箱驗證時間');
            $table->string('password')->comment('密碼');
            $table->rememberToken()->comment('記住我');
            $table->integer('landlord_id')
                ->forignId('id')->constrained('landlord')
                ->onUpdate('cascade') // 更新時的級聯操作
                ->onDelete('restrict') // 刪除時的級聯操作
                ->comment('關聯的租戶編號');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
