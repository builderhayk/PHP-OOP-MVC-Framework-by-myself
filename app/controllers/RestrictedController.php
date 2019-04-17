<?php
/**
 * Created by PhpStorm.
 * User: hayk1
 * Date: 09.04.2019
 * Time: 15:24
 */

class RestrictedController extends Controller
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
    }

    public function indexAction()
    {
        $this->view->render('restricted/index');
    }
}