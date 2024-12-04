<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contactGroup(){
        return $this->belongsTo(ContactGroup::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
