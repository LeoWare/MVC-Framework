<?php
/**
 *
 * @package MVC-Framework
 */
/**
 *
 * @package MVC-Framework
 */
class Controller {

    /**
     *
     * @var Load
     */
	public $load;
    /**
     *
     * @var Model
     */
	public $model;

	function __construct() {
		$this->load = new Load();
		$this->model = new Model();

		// determine what page you're on
		$this->home();
	}

    /**
     * @returns void
     * @access public
     */
	public function home() {
		$data = $this->model->user_info();
		$this->load->view('myview.php', $data);
	}
}
?>