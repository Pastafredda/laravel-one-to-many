<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable=[
        "code",
        "title",
        "author",
        "price",
        "plot",
        "editor",
        "is_available",

        "type_id"
    ];

    public function type(){
        return $this -> belongsTo(Type :: class);
    }
}
