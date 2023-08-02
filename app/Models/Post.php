<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Boleh di isi sisanya tidak boleh di isi
    // protected $fillable = ['title','excerpt','body'];

    // gak boleh di isi sisanya boleh di isi
    protected $guarded = ['id'];


    public function category(){
        return $this->belongsTo(Category::class);
    }

}
