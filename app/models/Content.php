<?php
/**
 * Created by PhpStorm.
 * User: prism
 * Date: 5/30/14
 * Time: 7:09 PM
 */

class Content extends Eloquent {
    protected $table = 'content';

    public function User(){
        $this->belongsTo('User');
    }
}