<?php
/*
Template Name: Order Form
*/

get_header();

?>
<div class="photo">
	<img class="photo" src="<?php bloginfo('template_url')?>/images/clothes.png" alt="">
</div>

<form action="" method="POST">
    Name: <input type="text" name="id">
    Email: <input type="text" name="address">
    Phone: <input type="text" name="phone">
    Product: <input type="text" name="product">
    Colour: <input type="text" name="colour">
    <button type="submit" name="enter">Submit</button>
</form>


<?php get_footer(); ?>