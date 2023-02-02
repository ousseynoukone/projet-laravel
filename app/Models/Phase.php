<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phase extends Model
{
    use HasFactory;
    public $timestamps = false;
    //si on respecte les conventions , il devient inutile de preciser ce qui suit 
 //   protected $table = 'projets';
  //  protected $primaryKey = 'id';
    protected $fillable = [
        "phase",
        "datedebut",
        "datefin",
        "idprojet",
        "idphase"
    ];

    public function projet(){
        return $this->belongsTo(Projet::class , 'idprojet');
    }
    

}
