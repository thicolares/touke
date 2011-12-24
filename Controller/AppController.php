<?php
/**
 * The AppController class is the parent class to all of your application’s controllers.
 *
 * @package Controller
 */
class AppController extends Controller {
	/**
	 * Helpers are the component-like classes for the presentation layer of your application.
	 * They contain presentational logic that is shared between many views, elements, or layouts.
	 *
	 * @var string
	 */
    public $helpers = array(
        'Html',
		'Time',
        'Form',
        'Session',
        'Text',
        'Js',
        // 'Layout',
		'Paginator',
		'Number'
    );
}