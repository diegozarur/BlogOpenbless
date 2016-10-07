<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model {

    protected $table = 'noticias';

    function getUrl1(){
        return \Config::get('app.url') .'/noticia/'. $this->id . '/' . \Serverfireteam\blog\BlogController::seoUrl($this->title);
    }

    public static  function noticias($number = null) {       
        if ( $number != null ){
            return self::where('public', 1)->take($number)
                    ->orderBy('created_at','desc')->paginate(5);                        
        } else {
            return self::orderBy('created_at','desc')->where('public', 1)
                    ->paginate(5);            
        }
    }

}
