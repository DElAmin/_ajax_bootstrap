<?php
    /* $data = 'This is PHP file';
    $new_data = 'This is another new Data in PHP';
    echo $data; */

    $names[] = 'ElAmin';
    $names[] = 'Ayman';
    $names[] = 'Ahmed';
    $names[] = 'Ibrhim';
    $names[] = 'Mohammed';
    $names[] = 'Adel';
    $names[] = 'Kamel';
    $names[] = 'Abdou';

    $count = 1;
    foreach($names as $name) {
        /* echo $count.'.'.$name.'<br>';
        $count++; */

        if ($_REQUEST['var1'] == $name) {
            /* echo "The Result is in the list
            and the result is: $_REQUEST[var1]"; */
            echo "<div style='color: green;'>$_REQUEST[var1] is available</div>";
        }
    }
?>