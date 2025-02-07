<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mark;

class Product extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $guarded=[];

    public function marks(){
        return $this->hasMany(Mark::class);
    }
}
