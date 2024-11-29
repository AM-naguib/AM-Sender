<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contractGroup(){
        return $this->belongsTo(ContractGroup::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
