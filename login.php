<?php
    include __DIR__ .'\lib\ConnDB.php';

    echo"
        <h3>Pannello di login applicazione</h3>
        <form action='' method='post'>
            hostname</br></br><input type='text' name='hn' size='8' required></br></br>
            user</br></br><input type='text' name='user' size='8' required></br></br>
            Password</br></br><input type='password' name='psw' size='16'></br></br>
            Nome DB</br></br><input type='text' name='nomedb' size='8' required></br></br>
            <input type='submit' value='Login'></br>
        </forn>
    ";
    //controllo che ci siano i dati inserti
    if(!empty($_POST['hn'])&!empty($_POST['user'])&!empty($_POST['nomedb'])){
        //connetto al db
        $conn = connectDB($_POST['hn'],$_POST['user'],$_POST['psw'],$_POST['nomedb']);
        if ($conn->connect_error) {
            echo 'Connection error: ' . $conn->connect_error;
        }else{   
            $conn->close();
            
            $file = fopen(__DIR__ ."\config\conf.php", "w") or die("Errore nella crezione del file");

            $testo ='<?php 
                $db = array(
                    "url" => "127.0.0.1:3306",
                    "username" => "root",
                    "password" => "",
                    "dbname" => "registrovoti"
                );
                define ("BASE_URL", "'.dirname($_SERVER['HTTP_REFERER']).'/");            
            ?>';
            fwrite($file, $testo);
            fclose($file);
            header('Location: '.dirname($_SERVER['HTTP_REFERER'])."/insert.php");
        }     
    }   
?>