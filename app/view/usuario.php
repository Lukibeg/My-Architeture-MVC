<!-- app/views/home.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Sobre</title>
</head>
<body>
    <h1>Bem-vindo a página de usuarios, <?php foreach($data as $id => $name){
            echo "ID: " . $id . " Nome: " . $name;
    } ?></h1>
</body>
</html>
