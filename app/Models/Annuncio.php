<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annuncio extends Model
{
    use HasFactory,Searchable;
    protected $fillable = ['name', 'price', 'description', 'category_id', 'user_id'];

    public function toSearchableArray()
    {
        $category = $this->category;
        $user= $this->user;
        $array = [
            'name' => $this->name,
            'id' => $this->id,
            'user_id'=> $user,
            'description' => $this->body,
            'category' => $category,
            'price'=>$this->price,
        ];
        // dd($array);
        return $array;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function toBeRevisionedCount()
    {
        return Annuncio::where('is_accepted',null)->count();
    }

    public function setAccepted($value)
    {
        $this->is_accepted=$value;
        $this->save();
        return true;
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getDescriptionSubstring()
    {
        if (strlen($this->description) > 15) {
            return substr($this->description, 0, 15) . '';
        } else {
            return $this->description;
        }
    }

    public function getNameSubstring()
    {
        if (strlen($this->name) > 10) {
            return substr($this->name, 0, 10) . '';
        } else {
            return $this->name;
        }
    }




}
