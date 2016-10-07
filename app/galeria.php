<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeria extends Model {

    protected $table = 'galerias';

    function getUrl4(){
        return \Config::get('app.url') .'/galeria/'. $this->id . '/' . \Serverfireteam\blog\BlogController::seoUrl($this->title);
    }

    public static  function galerias($number = null) {       
        if ( $number != null ){
            return self::where('public', 1)->take($number)
                    ->orderBy('created_at','desc')->get();                        
        } else {
            return self::orderBy('created_at','desc')->where('public', 1)
                    ->get();            
        }
    }

}
