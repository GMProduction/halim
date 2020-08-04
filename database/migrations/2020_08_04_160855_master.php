<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });


        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('bahan', ['Glossy', 'Karton'])->default('Karton');
            $table->integer('harga')->default(0);
            $table->integer('qty')->default(0);
            $table->integer('tebal')->default(0);
            $table->integer('panjang')->default(0);
            $table->integer('lebar')->default(0);
            $table->integer('tinggi')->default(0);
            $table->integer('minimum')->default(0);
            $table->string('url');
            $table->string('deskripsi');
            $table->timestamps();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->integer('nominal');
            $table->enum('status', ['0', '1', '2'])->default('0');
            $table->timestamps();
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('transactions_id')->unsigned()->nullable();
            $table->integer('harga');
            $table->integer('qty');
            $table->string('url');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('transactions_id')->references('id')->on('transactions');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transactions_id')->unsigned();
            $table->bigInteger('vendors_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('url');
            $table->text('description');
            $table->enum('status', ['0', '1', '2'])->default('0');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vendors_id')->references('id')->on('vendors');
            $table->foreign('transactions_id')->references('id')->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
