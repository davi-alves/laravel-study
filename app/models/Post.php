<?php

class Post extends Base
{
    protected $guarded = array();

    public static $rules = array('titulo' => 'required', 'resenha' => 'required|max:145');

    /**
     * Invoked before a model is saved. Return false to abort the operation.
     *
     * @param bool    $forced Indicates whether the model is being saved forcefully
     * @return bool
     */
    protected function beforeSave( $forced = false )
    {
        $slug = $this->_createAlias($this->titulo);
        if($slug != $this->slug && Post::where('slug', $slug)->first()) {
            throw new Exception("Slug já existe");
        }
        $this->slug = $slug;

        return true;
    }
}
