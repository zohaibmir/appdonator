<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Donations
 *
 * @author ding
 */
class Donation extends Base {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Validation rules
     */
    public $rules = array();

    public function user() {
        return $this->belongsTo('User');
    }

}
