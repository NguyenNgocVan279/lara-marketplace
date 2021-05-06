<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function sender() {
        return $this->belongsTo(User::class);
    }
    public function receiver() {
        return $this->belongsTo(User::class);
    }
}
