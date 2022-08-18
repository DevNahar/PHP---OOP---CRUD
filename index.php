<?php
    require_once './OopCrudController.php';

    $crudObj = new OopCrudController();

    $formData = [];
    $formData['name']     = 'Ashekun Nahar';
    $formData['email']    = 'nahar@gmail.com';
    $formData['password'] = 'abc@123';

    

    $crudObj->select('admins', $formData);
    // $crudObj->select('admins', " name, email");
    // echo "<pre>";
    // print_r($crudObj->resultDisplay());
    // echo "</pre>";