<?php
/**
 * MVC Framework
 *
 *
 * Based on tutorial from
 * http://net.tutsplus.com/tutorials/php/create-your-first-tiny-mvc-boilerplate-with-php/
 *
 * @author Samuel Raynor <samuel@samuelraynor.com>
 * @package MVC-Framework
 * @version 0.01
 *
 */
/**
 * Model
 *
 *
 * Base class for a model
 *
 * @package MVC-Framework
 */
class Model {
    /**
     *
     * @var string
     */
    public $myvar;
    /**
     *
     * @return array
     */
	public function user_info() {
		return array(
		'first' => "First",
		'last' => "Last"
		);
	}


}

