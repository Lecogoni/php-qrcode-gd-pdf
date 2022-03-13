# PHP-DECOUVERTE - BEWEB


$pseudo = $_POST["username"];
$password = $_POST["password"];

$encodedpassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `login` (`username`, `password`) VALUES ('" . $_POST["username"] . "', '" . $encodedpassword . "')";
// $sql = "INSERT INTO `login` (`username`, `password`) VALUE ($user , )";
echo $sql;
$stmt= $dbh->prepare($sql);
$stmt->execute();


echo "Vous êtes connecté en tant que : " .$pseudo ;
echo "Votre mot de passe est : " .$encodedpassword ;


## decouverte de la librairy GD

-> création d'image

## librairy fpdf184

-> génération de pdf
`http://0.0.0.0:70/functions/gen-pdf.php`


## PHP QR Code library
`http://0.0.0.0:70/functions/gen-qrcode.php`