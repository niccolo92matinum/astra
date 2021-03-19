<?php

namespace App\Models;



use App\Models\Article;
use App\Models\Category;
use App\Models\Subcategory;

use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use App\Models\Mastercategory;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;


use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;



class Article extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia, Searchable;

    protected $guarded = [];

    public function toSearchableArray()
    { 
// non so perchè questa riga non mi crea problemi con scout:import
        $article = $this->get()->pluck('title')->join(',');
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description'=> $this->description,
        ];
        return $array;
    
}




    public function url()
    {
       return route('show',[$this->id,\Str::slug($this->title)]);
    }

     public function preview($anteprima)
     {
         $anteprima = strip_tags($anteprima);
         $anteprima = substr($anteprima, 0 , 90);
         $anteprima = $anteprima . "...";
         return $anteprima;
     }
     public function getPreview()
     {
         return $this->preview($this->description);
     }


     public function registerMediaCollections(): void
{
    $this->addMediaCollection('gallery');

   
    
        //  ->useFallbackUrl('/img/immagine.jpg');    

}

public function registerMediaConversions(Media $media = null): void
{
    $this->addMediaConversion('thumb')
        //   
          ->crop(Manipulations::CROP_CENTER, 0, 1000)
        //   ->height(232)
          ->sharpen(8)
          ->performOncollections('gallery');

      
}      






public function category()
{
   return $this->BelongsTo(Category::class);
}

public function subcategory()
{
   return $this->BelongsTo(Subcategory::class);
}

public function mastercategory()
{
   return $this->BelongsTo(Mastercategory::class);
}



}
