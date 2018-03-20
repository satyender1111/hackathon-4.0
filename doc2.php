</head>
   <link rel="stylesheet" href="style.css">
</head>
<?php
$conn = new mysqli('localhost', 'id1600548_kota', 'kotahack', 'id1600548_price');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$q=$_REQUEST[q];
$sql = "SELECT * FROM scheme WHERE `id`=$q";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
echo '<div id=\'item\'>';
echo '<h1 id=\'hea\'>';
echo $row['id'].').  '.$row['head'];
echo '</h1>';
echo '<p>';
echo $row['body'];
echo '</p>';
echo '</div>';
    }//while closes
echo '</table>';
} else {
    echo "0 results";
}
?>