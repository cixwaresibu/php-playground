<?php
    $str = "<p> this is a paragraph</p> <a href=\"#\" >hello</a>";
    echo $str;
    echo strip_tags($str,'<p><a>');
