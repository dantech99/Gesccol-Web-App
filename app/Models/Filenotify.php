<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filenotify extends Model
{
    use HasFactory;
    protected $fillable = ["url"];

    public function filelable(){
        return $this->morphTo();
    }
}
