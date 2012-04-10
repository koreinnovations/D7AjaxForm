<?php
global $user;
$items = $variables['my_form'];


print $variables['my_form']['hidden'];
?>

<div id="my-form-outer">
  
  <?php print $variables['my_form']['item_1']; ?>
  
  <?php print $variables['my_form']['item_2']; ?>
  
  
  <?php print $variables['my_form']['my_container']; ?>
  
  <hr />
  
  <?php print $variables['my_form']['item_3']; ?>
  
  <hr />
  
  <?php print $variables['my_form']['submit']; ?>
  
</div>