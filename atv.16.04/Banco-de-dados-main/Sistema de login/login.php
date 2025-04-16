<?phpinclude 'db.pdp';

if ($_server["REQUEST_METHOD"] == "POST") {
    $username = $_POST{"username"};
    $password = $_POST{"password"};

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $passaword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION["loggedin"] = true;
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
