<?php
foreach($_POST as $key => $value) {
    if($key != "uf") {
        echo "$key: $value" . "</br";
    }
}

$vetor = $_POST["uf"];
print implode(", " , $vetor);

foreach($vetor as $value) {
    echo $value , "\n";
}
?>