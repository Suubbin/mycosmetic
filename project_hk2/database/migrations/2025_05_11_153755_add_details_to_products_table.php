<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('products', 'price')) {
                $table->decimal('price', 10, 0);
            }
            if (!Schema::hasColumn('products', 'description')) {
                $table->text('description')->nullable();
            }
            if (!Schema::hasColumn('products', 'image')) {
                $table->string('image');
            }
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('price');
            $table->dropColumn('description');
            $table->dropColumn('image');
        });
    }
};
