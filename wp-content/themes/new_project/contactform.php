<?php
/*
Template Name: Contact Form
*/

get_header();

?>

<form action="" method="POST">
    Name: <input type="text" name="fullName">
    Email: <input type="text" name="email">
    Password: <input type="text" name="password">
    Confirm Password: <input type="text" name="confirmPassword">
    <button type="submit" name="submit">Submit</button>
</form>


<?php get_footer(); ?>