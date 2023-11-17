<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruangan extends Model
{
    use HasFactory;
    protected $table = 'ruangan';
    protected $guarded = [];
    
    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
