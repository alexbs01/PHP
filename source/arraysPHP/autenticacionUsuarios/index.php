<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $user = "admin";
			$password = "1234";
			
			if(empty($user) || empty($password)) {
				echo "Algunha ou ambas cadeas están baleiras";
				
			} else if($user == "admin" && $password == "1234") {
				echo "Ambas cadeas contén a información de autentificación correcta";
				
			} else {
				echo "Unha das cadeas non contén o nome de usuario o contrasinal correctos";
			}
        ?>
    </body>
</html>
