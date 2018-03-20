</head>
   <link rel="stylesheet" href="style.css">
</head>
<?php
$conn = new mysqli('localhost', 'id1600548_kota', 'kotahack', 'id1600548_price');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$q=$_REQUEST[q];
$sql = "SELECT * FROM list WHERE `id`=$q";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    if ($row['status']==1)
{

       echo '<div id=\'item\'>';
       
       echo '<h1 id=\'name\'>';
       echo $row['name'];
       echo '</h1>';
       echo '<h1 id=\'cost\'>';
       echo $row['cost'];
       echo '</h1>';
       echo '<img src='.' \''.$row['imagepath'].'\''.' class=\'first\' style=\'width:204px; height:228px;\'>';
       echo '<img  src='.' \''.$row['gpath'].'\' '.' class=\'second\' style=\'width:304px; height:200px;\'>';
       echo '</div>';
}
  else
{
       echo '<div id=\'item\'>';
      
 echo '<h1 id=\'name\'>';
       echo $row['name'];
       echo '</h1>';
       echo '<h1 id=\'cost\'>';
       echo $row['cost'];
       echo '</h1>';
       echo '<img  src='.' \''.$row['imagepath'].'\' '.' class=\'first\' style=\'width:204px; height:228px;\'>';
       echo '<img  src='.' \''.$row['gpath'].'\' '.' class=\'second\' style=\'width:304px; height:200px;\'>';
       echo '</div>';
}
   
    }//while closes
echo '</table>';
} else {
    echo "0 results";
}
?>