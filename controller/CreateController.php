<?php
class CreateController extends AppController
{
    function __construct(){
        parent::__construct();
    }

    function filter()
    {
        switch($this->action)
        {
            default:
                return $this->smarty->fetch('pages' . DS . 'campaign.tpl');
                break;
        }
    }

}

?>