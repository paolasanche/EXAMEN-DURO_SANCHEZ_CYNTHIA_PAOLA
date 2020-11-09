<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $primarykey = "numero";
    protected $fillable = ["numero","fecha","id_cliente"];
 
}
