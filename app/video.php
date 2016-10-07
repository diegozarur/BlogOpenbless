<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model {

    protected $table = 'videos';

    function getUrl3(){
        return \Config::get('app.url') .'/video/'. $this->id . '/' . \Serverfireteam\blog\BlogController::seoUrl($this->title);
    }

    public static  function videos($number = null) {       
        if ( $number != null ){
            return self::where('public', 1)->take($number)
                    ->orderBy('created_at','desc')->paginate(10);                        
        } else {
            return self::orderBy('created_at','desc')->where('public', 1)
                    ->paginate(10);            
        }
    }

}
