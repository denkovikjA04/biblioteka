<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'book';

    public function pisatel(){
        return $this ->belongsToMany(Authors::class,'book_has_author', 'book_id', 'author_id');
    }
}

