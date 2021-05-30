<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "abi-mftt"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM schueler";
$numb = 3;
$queryL = "SELECT * FROM komitee WHERE komitee = ?";
$stmt = $mysqli->prepare($queryL); 
$stmt->bind_param("i", $numb);

echo '<h1>Der Leiter deines Komitees: </h1>';


$stmt->execute();
if ($result = $stmt->get_result()) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["komitee"];
        $field2name = $row["komiteename"];
        $field3name = $row["leitung"];
      

        echo '<h3><tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
              </tr></h3>';
    }
    $result->free();
} 
echo '<h1>Eine Liste alle Mitglieder deines Komitees: ';
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">SchülerID</font> </td> 
          <td> <font face="Arial">Vorname</font> </td> 
          <td> <font face="Arial">Nachname</font> </td> 
          <td> <font face="Arial">E-Mail</font> </td> 
          <td> <font face="Arial">PLZ</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["SID"];
        $field2name = $row["vorname"];
        $field3name = $row["nachname"];
        $field4name = $row["mail"];
        $field5name = $row["plz"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
echo '<a href ="http://localhost/Website/fake.html"><button class="button" type="button" class="cancelbtn">Okay</button></a>';
?>
</body>
</html>