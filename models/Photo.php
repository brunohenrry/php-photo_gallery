<?php

namespace Models; // Atualize o namespace para "Models"

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable = ['title', 'image_filename'];
}
