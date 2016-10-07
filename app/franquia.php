<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class franquia extends Model {

    protected $table = 'franquias';
    function getUrl5(){
        return \Config::get('app.url') .'/franquias/'. $this->id . '/' . \Serverfireteam\blog\BlogController::seoUrl($this->title);
    }

    public static  function franquias($number = null) {       
        if ( $number != null ){
            return self::where('public', 1)->take($number)
                    ->orderBy('created_at','desc')->get();                        
        } else {
            return self::orderBy('created_at','desc')->where('public', 1)
                    ->get();            
        }
    }
}
