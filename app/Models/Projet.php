<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    public $timestamps = false;
    //si on respecte les conventions , il devient inutile de preciser ce qui suit 
 //   protected $table = 'projets';
  //  protected $primaryKey = 'id';
    protected $fillable = [
        "description",
        "datedebut",
        "datefin"
    ];
}
