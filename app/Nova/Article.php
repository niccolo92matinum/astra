<?php

namespace App\Nova;







use App\Nova\Category;
use App\Nova\Subcategory;
use Laravel\Nova\Fields\ID;
use App\Nova\Mastercategory;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;

use Waynestate\Nova\CKEditor;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ebess\AdvancedNovaMediaLibrary\Fields\Files;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;




class Article extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */


    public static $model = \App\Models\Article::class;

    public static $group = 'Contenuti';
     
    public static function label(){
        return __('Articoli');
    }
 public static function singularLabel(){
     return __('Articolo');
 }


    public static $title =  'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [


            
            ID::make(__('ID'), 'id')->sortable(),

            Text::make(__('Titolo'),'title')
                ->rules('required'),
                
                BelongsTo::make('Categoria', 'category', Category::class),
                
                BelongsTo::make('Subategoria', 'subcategory', Subcategory::class),
                
                BelongsTo::make('Mastercategoria', 'mastercategory', Mastercategory::class),


           
            // Select::make(__('Categoria'),'category')
            //     ->options([
            //             'Connettore',
            //             'Antenna',
            //             'Twin',
            //             'Cavo',
            //             'Telecomando',
            //             'Amplificatori',
            //             'Decoder',
            //             'Prese',
            //         ])
            //         ->displayUsingLabels()
            //         ->rules('required'),
            Image::make(__('Immagine'), 'img')
                ->disk('public')
                ->path('/articoli'),

            Images::make('Schemi', 'gallery') 
                ->enableExistingMedia()    
                ->conversionOnIndexView('thumb'),


            Files::make('Multiple file', 'pdf')
                   ->enableExistingMedia() 
                   ->customPropertiesFields([
                     Boolean::make('Active'),
                     Markdown::make('Description'),

                 ]),
              
               
                // ->rules('required'),
            
            

            DateTime::make(__('Data'), 'created_at')
                    ->format('DD/MM/YYYY')
                    ->sortable(),  

            CKEditor::make(_('Propietà'), 'property')
                    ->hideFromIndex(),        

            CKEditor::make(_('Descrizione'), 'description')
                    ->hideFromIndex(),

            Boolean::make(__('Pubblicato'), 'published'),

            
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
