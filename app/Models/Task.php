<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded =['id'];
    protected $fillable = ['title', 'description'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
