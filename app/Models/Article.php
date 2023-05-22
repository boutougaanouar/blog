<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function commentaire(){
        return $this->hasMany(commentaire::class,'articla_id');
    }
}
