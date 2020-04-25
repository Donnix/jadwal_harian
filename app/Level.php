<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $tables="levels";
    protected $fillable =['nama_level','deskripsi'];
}
