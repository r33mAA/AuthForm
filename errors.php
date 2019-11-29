<?php  if (count($errors) > 0) : ?>
  <div class="error">
    <?php foreach ($errors as $error) : ?>
      <?php 
      echo '<script language="javascript">';
 			echo 'alert($error)';
  		echo '</script>';
       ?>
    <?php endforeach ?>
  </div>
<?php  endif ?>