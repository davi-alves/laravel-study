<?php

class Post extends Eloquent {
    protected $guarded = array();
    protected $fillable = array('titulo', 'resenha');

    public static $rules = array();
}
