<table>
  <?php
    $logFile = fopen('coffee_log.txt', 'r') or die("Could not find log file!");
    while(!feof($logFile)) {
    $line = fgets($logFile);
    if ($line == ''){ continue; }
    list($user, $time) =  explode(' ', $line);
    if ($user != $_SERVER['REMOTE_USER']) { continue; }
    $time = date("H:i - Y-m-d", $time);
    echo  "<tr>\n\t<td>" . $user . "</td>\n\t<td>" . $time . "</td>\n</tr>\n";

    }
    fclose($logFile);
    ?>

</table>
