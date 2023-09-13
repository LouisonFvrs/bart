$server = "localhost";
$db = "bart";
$user = "root";
$passwd = "";

$dsn = "mysql:host=$server;dbname=$db";
$pdo = new PDO($dsn, $user, $passwd);