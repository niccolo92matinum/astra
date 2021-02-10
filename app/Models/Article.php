<?php

namespace App\Models;



use App\Models\Category;
use Illuminate\Support\Str;
use Spatie\Image\Manipulations;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $guarded = [];

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
    $this->addMediaCollection('gallery')
         ->useFallbackUrl('/img/immagine.jpg');    

}

public function registerMediaConversions(Media $media = null): void
{
    $this->addMediaConversion('thumb')
        //   
          ->crop(Manipulations::CROP_CENTER, 720, 405)
        //   ->height(232)
          ->sharpen(8)
          ->performOncollections('gallery');
}


public function category()
{
   return $this->BelongsTo(Category::class);
}

}
