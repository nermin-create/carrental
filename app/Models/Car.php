<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;


    protected $fillable = [
        'image_data',
        
    ];
    protected $table="cars";


    public function category(){                       
        return  $this->belongsTo(Category::class) ;                             
                                                      
     }
}
