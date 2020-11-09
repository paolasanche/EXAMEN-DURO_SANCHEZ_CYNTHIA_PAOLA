<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_factura extends Model
{
    protected $primarykey = "num.detalle";
    protected $fillable = ["num-detalle","numero-factura","id_producto","cantidad"];

}
