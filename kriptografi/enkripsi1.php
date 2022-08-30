<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        'a' => '~', 'i' => '$', 'u' => '^', 'e' => '#', 'o' => '+',
        'A' => '!', 'I' => '%', 'U' => '_', 'E' => '=', 'O' => '*' 
    );

    // $input = strtolower($input);

    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang di enkripsi adalah " , $input;

    echo "<br><br>";
    echo "hasil enkripsi adalah " , $enkripsi;

};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>