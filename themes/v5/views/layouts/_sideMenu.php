<?php
/**
 * $menu
 */
?>
<div style="position:fixed;top:200px;left:50px;">
    <ul class="nav nav-pills nav-stacked">
        <?php
        foreach ($menu as $key => $menuItem) {
            echo '<li><a href="' . $key . '">' . $menuItem . '</a></li>';
        }
        ?>
    </ul>
</div>