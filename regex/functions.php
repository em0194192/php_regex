<?php
    function validateName($name)
    {
        $namePattern = "/^[a-zA-Z ]+$/"; //regex pattern for name
        return preg_match($namePattern, $name); //match the pattern with the name input
    }

    function validatePhone($phone)
    {
        $phonePattern = "/[0-9]{3}-[0-9]{3}-[0-9]{4}/"; //regex pattern for phone
        return preg_match($phonePattern, $phone); //match the pattern with the phone input
    }

