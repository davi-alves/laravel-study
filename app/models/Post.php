<?php

use LaravelBook\Ardent\Ardent;

class Post extends Ardent {
    protected $guarded = array();

    public static $rules = array('titulo' => 'required', 'resenha' => 'required');
}
