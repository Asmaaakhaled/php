<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$arr = [

        /**0 */
         ["name" => "nada", "age" => 26, "address" => "cairo"],
        /**1 */
         ["name" => "asmaa", "age" => 21, "address" => "menoufia"],
        /**2 */
         ["name" => "mohamed", "age" => 21, "address" => "helwan"],
        /**3 */
         ["name" => "radwa", "age" => 22, "address" => "tanta"],
        /**4 */
         ["name" => "mai", "age" => 23, "address" => "alex"],
    
    ];
    $headers = array_keys($arr[0]);

echo "<table border=1>";
echo "<thead>";
echo "<tr>";
foreach($headers as $header)
// echo "<th>name  </th>";
// echo "<th> subject </th>";
echo "<th>" .$header."</th>";
    
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($arr as $value) {  // array
    // print_r($value);
    //    echo "<br>";
    echo "<tr>";
    foreach ($value as $index => $arrValue) {
        // echo "$index : $arrValue  <br>";
        echo "<td>".$arrValue." </td>";
    }
    // echo "<br>********************** <br> ";
    echo "</tr>";
}

echo "</tbody>";
?>
</body>
</html>



