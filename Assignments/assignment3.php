<?php
// Sample data as an associative array
$data = [
    ["Name" => "John", "Roll No"=> "21300"],
    ["Name" => "Hari", "Roll No"=> "21301"],
    ["Name" => "Marry", "Roll No"=> "21303"]
 ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Table Display</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Table</h2>

<table>
    <tr>
        <?php 
        // Display table headers dynamically
        foreach ($data[0] as $key => $value) {
            echo "<th>$key</th>";
        }
        ?>
    </tr>
    <?php
    // Display table rows dynamically
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
