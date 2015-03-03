<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Base implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * To protect against mass assignment
     * 
     */
    protected $fillable = array('first_name', 'last_name', 'email', 'phone', 'address', 'zip', 'city', 'status');

    /*
     * prevents the listed columns from mass assignment.
     */
    protected $guarded = array('id', 'password');

    /*
     *  SignUp Rules
     */
    public static $rules = array(
        'email' => 'required|email|unique:users',
        'password' => 'required|between:6,12'
    );

    /*
     * Rules for updating the profile
     */
    public static $rulesUpdate = array(
        'first_name' => 'required',
        'last_name' => 'required',
        'phone' => 'required|numeric',
        'address' => 'required',
        'zip' => 'required|numeric',
        'city' => 'required'
    );

    public function donations() {
        return $this->hasMany('Donation', 'user_id');
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail() {
        return $this->email;
    }

}
