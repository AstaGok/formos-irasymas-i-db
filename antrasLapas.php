
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="treciasLapas.php" method="POST">
            <input type="hidden" name="vardas" value="<?php echo $_POST["vardas"];?>">
            <input type="hidden" name="pavarde" value="<?php echo $_POST["pavarde"];?>">
            <input type="hidden" name="password" value="<?php echo $_POST["password"];?>">
            <label for="name">Adresas</label></br>
            <input type="text" name="adresas" required></br>
            <label for="phone">Telefono Nr.</label></br>
            <input type="tel" name="phone" required></br>
            <label for="email">Email</label></br>
            <input type="email" name="email" required></br> 
            <label for="padetis">Seimynine padetis</label></br>
            <input type="text" name="padetis"></br>
            <input type="submit" name="submit" value="Pateikti">
        </form>
    </body>
</html>
