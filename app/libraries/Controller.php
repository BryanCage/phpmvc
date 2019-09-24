<?php
/*
 * Base Controller
 * Loads teh models and views
*/

class Controller
{
    // Allow System to Load Model from Controller
    public function model($model)
    {
        // require model file
        require_once '../app/models/' . $model . '.php';

        //Instantiate Model
        return new $model();
    }

    // Load View
    public function view($view, $data = [])
    {
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            // View does not exist
            die('View does not exist.');
        }

    }
}