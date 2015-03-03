<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categories
 *
 * @author ding
 */
class Category extends Base {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * To protect against mass assignment
     * 
     */
    protected $fillable = array('title', 'description', 'icon', 'status');

    /*
     * prevents the listed columns from mass assignment.
     */
    protected $guarded = array('id');

    /**
     * Validation rules
     */
    public static $rules = array('title' => 'required', 'description' => 'required', 'status' => 'required');
    
    /*
     *  A category can have many organisations
     */
    public function organisations() {
        return $this->hasMany('Organisation', 'category_id');
    }

}
