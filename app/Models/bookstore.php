<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookstore extends Model
{
    protected $table ='bookstores';
    protected $primaryKey  = 'id';
    protected $fillable = [
        
        "BookAuthor","BookIsbn","Book_title","Genre_ID"
    ];
    use HasFactory;
}
