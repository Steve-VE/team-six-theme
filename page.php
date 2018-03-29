<?php
get_header();
?>

<main>
    <?php
        wp_list_categories(array('hide_empty' => false)); 
        // wp_nav_menu();
    ?>

</main>

<?php
get_footer();
?>