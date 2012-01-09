<?php
/**
 * Page  Controller
 *
 * PHP version 5
 */
class PagesController extends AppController {

    /**
     * Page name
     *
     * @var string
     * @access public
     */
    public $name = 'Pages';
	
	
	/**
	 * Just to set title_for_layout
	 *
	 * @return void
	 * @author Thiago Colares
	 */
	public function home(){
		$this->set('title_for_layout', Configure::read('ProjectName'));
	}
	
}