<?php

class Controller
{
    private $view;
    private $model;

    public function view($view_name, $data=[])
    {
        $this->view = new View($view_name, $data);
        return $this->view;
    }

    public function model()
    {
        
    }
}