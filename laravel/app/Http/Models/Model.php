<?php
/**
 * Created by PhpStorm.
 * User: michelhernandez
 * Date: 23/05/2017
 * Time: 19:03
 */

namespace App;

class Model extends \Illuminate\Database\Eloquent\Model {

    public function scopeCle($query, $cle) {
        return $query->whereCle($cle);
    }

}