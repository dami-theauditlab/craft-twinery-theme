<?php 
    get_header();
?>
<div>
<?php  if (!is_search()) { // If post show on this page
        include "posts.php";
    }
?>
<?php  if (is_search()) { // If post show on this page
        include "search-page.php";
    }
?>



</div>
<?php
    get_footer();
?>

