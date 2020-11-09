<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $primarykey = "id";
    protected $fillable = ["id","nombre","precio","stock"];

}
