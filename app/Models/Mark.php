<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Mark extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function transaction(){
        return $this->belongsTo(Transaction::class );
    }
}
