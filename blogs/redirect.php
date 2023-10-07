<?php
if (isset($_SESSION))
{
    if ($_SESSION['admin']){

    }
    else{
        header("Location: /blogs");
    }
}
else {
    header("Location: /blogs");
}
