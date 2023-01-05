<?php 
    get_header();
?>
<div>
<?php   // If post show on this page
   if (!is_search()) {
        include "posts.php";
   }
?>

<?php // If search page 
    if ( ! is_post_type_archive() && is_search()  )  {
        include "search-page.php";
    }
?>

</div>
<?php
    get_footer();
?>

