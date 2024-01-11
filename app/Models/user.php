<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class user extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function post()
    {
        return $this->hasMany(Post::class, 'idu');

    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'idu');

    }

    public function role()
    {
        return $this->belongsToMany(Role::class, 'myroles','userId','roleId');

    }
    
}
