<?php
    $text_section_title = get_field('text_section_title');
    $text_section_text= get_field('text_section_text');
?>

<section id="text-section">
    <div class="container">
        <h2 class="title">
            <?php echo $text_section_title; ?>
        </h2>
        <div>
            <?php echo $text_section_text; ?>
        </div>
    </div>
</section>