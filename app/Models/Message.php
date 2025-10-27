<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    // Agora permite gravar user_id e message
    protected $fillable = ['user_id', 'message', 'image'];


    public $timestamps = true;

    // 🔹 Relação opcional com User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
