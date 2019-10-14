<html>
<body>
    <style>
    table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}</style>
<?php 
$host="localhost";
$user="id10823184_admin";
$passd="admin";
$db="id10823184_gps";
$mysqli = new mysqli($host, $user, $passd, $db); 
$query = "SELECT * FROM gps";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2" id="t01"> 
      <tr> 
          <td> <font face="Arial">Client IP</font> </td> 
          <td> <font face="Arial">latitude</font> </td> 
          <td> <font face="Arial">longitude</font> </td> 
          <td> <font face="Arial">Time Stamp</font> </td>  
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ip"];
        $field2name = $row["lat"];
        $field3name = $row["long"];
        $field4name = $row["time"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>