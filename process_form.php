<?php

// Check if the form is submitted
if ( isset( $_POST['submit'] ) ) {

// retrieve the form data by using the element's name attributes value as key

echo '<h2>form data retrieved by using the $_REQUEST variable<h2/>';

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

// display the results
echo 'Your name is ' . $name .' ';


// check if the post method is used to submit the form

if ( filter_has_var( INPUT_POST, 'submit' ) ) {

echo '<h2>form data retrieved by using $_POST variable<h2/>';

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// display the results
echo 'Your name is ' . $name .' ';
}

// check if the get method is used to submit the form

if ( filter_has_var( INPUT_GET, 'submit' ) ) {

echo '<h2>form data retrieved by using $_GET variable<h2/>';

$name = $_GET['name'];
$email = $_GET['email'];
$comments = $_GET['comments'];
}

// display the results
echo 'Your name is ' . $name;
exit;
}

?>