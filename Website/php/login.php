<?php 


$email = $_POST["username"];
$ipsw = $_POST["passwort"];


require_once "config.php";
$sql = "SELECT * FROM schueler WHERE mail=?"; // SQL with parameters
$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result
$user = $result->fetch_assoc(); // fetch the data   

$hashedpsw = $user['passwort'];
$gr = $user['komitee'];
//echo $hashedpsw;

if(password_verify($ipsw, $hashedpsw)){
    switch ($gr) {
        case "1":
          header("Location: http://localhost//website//php//1.php");
          exit();
          break;
        case "2":
            header("Location: http://localhost//website//php//2.php");
            exit();
          break;
        case "3":
            header("Location: http://localhost//website//php//3.php");
            exit();
          break;
          case "3":
            header("Location: http://localhost//website//php//4.php");
          exit();
            break;
        default:
          echo "Error";
      }
}
else{
    echo 'Falsche Eingabe';
}

?>