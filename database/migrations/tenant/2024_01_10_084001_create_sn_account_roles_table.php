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
        Schema::create('sn_account_roles', function (Blueprint $table) {
            $table->id('rid')->comment('角色編號');
            $table->string('title', 128)->comment('角色名稱');
            $table->text('description')->comment('描述');
            $table->string('identity', 128)->comment('身分');
            $table->integer('created')->comment('建立時間');
            $table->bigInteger('created_aid')->comment('建立人aid');
            $table->integer('updated')->comment('修改時間');
            $table->bigInteger('updated_aid')->comment('修改人aid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sn_account_roles');
    }
};
