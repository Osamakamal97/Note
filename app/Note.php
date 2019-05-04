<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $table = 'note';
    protected $primaryKey = 'id';
    protected $fillable = ['note_title','note_content'];
}
