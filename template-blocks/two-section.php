<?php
    $two_section_text = get_field('two_section_text'); 
    $two_section_image = get_field('two_section_image'); 
?>


<section id="two-section">
    <div class="container">
        <div class="text-div">
            <?php echo $two_section_text ?>
        </div>
        <div class="img-div">
            <img src="<?php echo $two_section_image['url'] ?>">
        </div>
    </div>
</section>