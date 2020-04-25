<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table ="tasks";
    protected $fillable = ['name', 'description','time_start' ,'time_end','task_date'];
}
