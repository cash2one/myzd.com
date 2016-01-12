<style>
    .album{width:719px;}
    // .album .image-holder{display:inline;width:200px;position:relative;}
    .album img{width:230px;vertical-align: top;float:left;}
</style>
<div class="album">
    <ul>
        <?php
        for ($i = 0; $i < 20; $i++) {
            echo '<li class="image-holder">';
            echo "<img src='http://placekitten.com/300/";
            echo rand(200, 500);
            echo "' alt=''>";
            echo '</li>';
        }
        ?>
    </ul>
</div>