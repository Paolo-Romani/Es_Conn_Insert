<?php
    include __DIR__ .'\config\conf.php';
    include __DIR__ .'\lib\ConnDB.php';


    if( !empty($_POST["cf"])&&
        !empty($_POST["nome"])&&
        !empty($_POST["cognome"])&&
        !empty($_POST["email"])
    ){
        $conn = connectDB($db["url"],$db["username"],$db["password"],$db["dbname"]);
        if(!$conn->connect_error){
            $query = "INSERT INTO anagrafica VALUES ('".$_POST["cf"]."','".$_POST["nome"]."','".$_POST["cognome"]."','".$_POST["email"]."')";
            $rs = $conn->query($query);
        }else{
            die("Errore connessione al database");
        }

    }else{
        echo "<h3 style='color:red'>Tutti i campi sono obbligatori</h3>";
    }

    echo"
        <h3>Pannello per inserire anagrafica studente</h3>
        <form action='' method='post'>
            codice fiscale</br><input type='text' name='cf' size='40' required></br></br>
            nome</br><input type='text' name='nome' size='40' required></br></br>
            cognome</br><input type='password' name='cognome' size='40'></br></br>
            email</br><input type='email' name='email' size='40' required></br></br>
            <input type='submit' value='inserisci'></br>
        </forn>
    ";
    
    if($rs)
        echo "<h3 style='color:blue'>Tupla aggiunta</h3>";
    else
        echo "<h3 style='color:red'>Impossibile aggiungere la Tupla</h3>";

?>