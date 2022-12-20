<?php
    $three_section_title_1 = get_field('three_section_title_1');
    $three_section_link_1 = get_field('three_section_link_1'); 

    $three_section_title_2 = get_field('three_section_title_2'); 
    $three_section_link_2 = get_field('three_section_link_2'); 

    $three_section_title_3 = get_field('three_section_title_3'); 
    $three_section_link_3 = get_field('three_section_link_3'); 

?>


<section id="three-section">
    <div class="container">
        <div class="three-section-div">
            <h2><?php echo $three_section_title_1; ?></h2>
            <a href="<?php echo $three_section_link_1 ?> "><div>SHOP NOW</div></a>
        </div>
        <div class="three-section-div">
            <h2><?php echo $three_section_title_2; ?></h2>
            <a href="<?php echo $three_section_link_2 ?> "><div>SHOP NOW</div></a>
        </div>
        <div class="three-section-div">
            <h2><?php echo $three_section_title_3; ?></h2>
            <a href="<?php echo $three_section_link_3 ?> "><div>SHOP NOW</div></a>
        </div>
    </div>
</section>