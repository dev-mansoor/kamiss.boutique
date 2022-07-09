<?php

    $new_name = "./images/kb-s-1.jpeg";
    $old_name = "./images/kb-1.jpeg";

    if(rename($new_name,$old_name))
    {
        echo "renamed successfully !";
    }
    else
    {
        echo "renamed failed !";
    }

?>