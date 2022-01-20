<?php

if ($_POST['subscribe'] === 'Subscribe') {
    echo '<p>Thanks for subscribing</p>';
} else {
   header('Refresh:0, url=/forms');
}