<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle-factura', function (Blueprint $table) {
            $table->bigIncrements('num-detalle');
            $table->integer("numero-factura");
            $table->biginteger('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->integer("cantidad");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle-factura');
    }
}
