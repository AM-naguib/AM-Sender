<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function contactgroup(){
        return $this->hasMany(ContactGroup::class);
    }

    public function device(){
        return $this->belongsTo(Device::class);
    }
}
