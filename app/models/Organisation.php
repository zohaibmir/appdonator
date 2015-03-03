<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Organisations
 *
 * @author ding
 */
class Organisation extends Base {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'organisations';

    /**
     * Validation rules
     */
    public $rules = array();

    public function category() {
        return $this->belongsTo('Category');
    }

}
