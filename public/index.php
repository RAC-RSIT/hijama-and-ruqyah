<?php 

class HomeController 
{
    public function index() 
    {
        // fetch data for the home page 
        // interact with models  

        $data = [
            // construct an object (associative array) for passing to the home page 
        ]; 

        require '../views/home.php'; 
    }
}