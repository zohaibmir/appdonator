<?php

/**
 * Global message helper functions 
 */

/**
 * Set message
 * 
 * @param string $message Message
 * @param string $type Type of message, default is info (alert, success)
 * @author Andreas Svitzer
 */
function setMessage($message, $type='')
{
	Session::flash('message', $message);
	Session::flash('type', $type);	
}


/**
 * Get message
 * 
 * @author Andreas Svitzer
 */
function getMessage()
{
	// Check if we have a flash message to display
	if (Session::has('message'))
	{
		return View::make('common._message', array('message' => Session::get('message'), 'type' => Session::get('type')));	
	}
}