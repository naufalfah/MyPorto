<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Porto extends Model
{
    protected $table = 'tb_portofolio';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
