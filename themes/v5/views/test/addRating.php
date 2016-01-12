<?php
$formAction = $this->createUrl('test/addRating');
?>
<form action="<?php echo $formAction;?>" method="post">
    <input type="text" name="TripRating[id]" value="" placeholder="trip id"/>
    <input type="text" name="TripRating[score]" placeholder="score" />
    <input type="submit" value="Submit" />
</form>