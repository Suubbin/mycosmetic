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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->enum('type', ['import', 'sell']);  // Loại: nhập kho hoặc bán
            $table->integer('quantity')->unsigned();  // Số lượng (không thể âm)
            $table->timestamp('transaction_date')->useCurrent(); // Ngày giao dịch
            $table->timestamps();
            $table->index('product_id');  // Tạo chỉ mục cho product_id
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

