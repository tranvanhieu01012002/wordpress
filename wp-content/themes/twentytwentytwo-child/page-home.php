<?php
get_header();
?>
<main>
    
    <div class="container-post">
        <?php
        get_template_part('./display-post/main-post')
        ?>
        <?php
        get_template_part('./display-post/center-post')
        ?>
        <?php
        get_template_part('./display-post/main-post')
        ?>
    </div>
</main>