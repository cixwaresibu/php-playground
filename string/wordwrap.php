<?php
    $string = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quasi vitae doloribus voluptatibus recusandae distinctio ipsum. Dignissimos atque tempora voluptatem?';
    echo wordwrap($string,10,"<br>",true);
?>
<?php
$str = "An example of a long word is: Supercalifragulistic";
?>
<textarea><?php echo wordwrap($str,15,"\n"); ?></textarea>
<div style="padding: 5px; background: gray;"><?php echo wordwrap($str,15,"<br />"); ?></textarea>