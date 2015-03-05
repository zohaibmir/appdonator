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

    /*
     * prevents the listed columns from mass assignment.
     */
    protected $guarded = array('id');

    /**
     * Validation rules
     */
    public $rules = array('name' => 'required', 'description' => 'required', 'email' => 'required|email', 'phone' => 'required', 'address' => 'required', 'zip' => 'required','city' => 'required', 'category_id' => 'required', 'website' => 'required');

    public function category() {
        return $this->belongsTo('Category');
    }

}
