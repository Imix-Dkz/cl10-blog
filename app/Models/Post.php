<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relación N:1 <-, con User y Category
    public function user(){ return $this->belongsTo(User::class); }
    public function category(){ return $this->belongsTo(Category::class); }

    //Relación N:N, con Tag
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relación 1:1 Polimorfica con Imagenes
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
