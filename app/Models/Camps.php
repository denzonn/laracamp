<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Camps extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'price',
    ];

    // Untuk cek pembelian
    public function getIsRegisteredAttribute()
    {
        // Jika belum regis maka akan return false
        if(!Auth::check()) return false;

        // Jika sudah regis maka akan return true
        return Checkout::whereCampId($this->id)->whereUserId(Auth::id())->exists();
    }
}
