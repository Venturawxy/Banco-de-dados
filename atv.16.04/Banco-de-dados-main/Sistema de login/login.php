<?phpinclude 'db.pdp';

if ($_server["REQUEST_METHOD"] == "POST") {
    $username = $_POST{"username"};
    $password = $_POST{"password"};

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
}