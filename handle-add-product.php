<?php

extract($_POST);



$errors = [];

if (empty($name)) {
    $errors[] = 'name is required';
} elseif (!is_string($name)) {
    $errors[] = 'name must be string ';
} elseif (strlen($name) > 255 || strlen($name) < 5) {
    $errors[] = 'name must be from 5 to 255 ';
}


if (empty($price)) {
    $errors[] = 'price is required';
} elseif (!is_integer((int) $price)) {
    $errors[] = 'price must be int ';
} elseif ($price <= 0) {
    $errors[] = 'price must be positive ';
}



if (!is_string( $description)) {
    $errors[] = 'description must be string ';
}


var_dump($errors);