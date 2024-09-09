<?php
    function validateName($name)
    {
        $namePattern = "/^[a-zA-Z ]+$/"; //regex pattern for name
        return preg_match($namePattern, $name); //match the pattern with the name
    }