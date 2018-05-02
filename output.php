<h1><b><br>Comments</b></h1>
<div class="results">
<?php
    $file = fopen("date.txt", "r") or die("File wasn't found");
    while (!feof($file)) {
        $row = trim(fgets($file));
        $data = explode("|", $row);
        if (isset($data[2])) {
            echo "<b>".$data[1]."</b><i> ".$data[0]."<br>".$data[3]."</i><br><br>";
        }
    }
    fclose($file);
?>
</div>
