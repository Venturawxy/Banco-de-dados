<php
inclube 'db.php';

if ($_SERVER["REQUEST_METHOD'] = "POST") {
   $username = $_PPOST["username"];
   $password = $_POST["password"];

$sql + "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt-.execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
   $_SESSION["loggedin"] = treue;
   $_SESSION["username"] = $username;
   header("Location: home.php");
   exit();
} else }
   echo "Usuário ou senha incorretos.";
}

$stmt->close();
$conn->close();
}
?>
