<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksGenre extends Model
{
    protected $table ='books_genres';
    protected $primaryKey  = 'Genre_ID';
    protected $fillable = [
        
        "GenreName"
    ];
    use HasFactory;
}
