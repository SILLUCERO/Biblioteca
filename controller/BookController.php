<?php

class BookController
{
    public $model;
    public function __construct()
    {
        require_once("");
        require_once("/Applications/MAMP/htdocs/MVC_EXERCISE/model/MemberModel.php");
        $this->model = new MemberModel();
    }
    //pregunta al modelo si ya ha obtenido los datos de la db
    public function getMembers()
    {
        return ($this->model->getMembers() ? $this->model->getMembers() : "there is no members");

    }
}


?>