<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $primarykey ='id';
    protected $table ='memos';
    protected $fillable =[
    'judul','memo','created_at'];
}
