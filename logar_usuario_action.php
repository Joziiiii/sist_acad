<?php
    try {
        // conectar ao banco de dados
        $host='localhost';
        $db = 'academia';
        $username = 'root';
        $password = '';
        $dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // preparar comando de INSERT
        $stmt = $dbh->prepare("select email, senha from usuario;");
        		
        // executar comando SQL
        if($stmt->execute()) {
            header('Location: tela_inicio_form.php');

        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
?> 
