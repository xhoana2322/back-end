<?php

// configurazione per la connessione al database
    $config = [
        'mysql_host' => 'localhost',
        'mysql_user' => 'root',
        'mysql_password' => ''
    ];

    // connessione al database
    $mysqli = new mysqli(
        $config['mysql_host'],
        $config['mysql_user'],
        $config['mysql_password']
    );

    // Verifica della connessione
    if($mysqli->connect_error) {
        die($mysqli->connect_error); 
    } 

    // Seleziono il DB
    $mysqli->query('USE esercitazione_10;'); 
    
    //    // creiamo la tabella
    //    $sql = 'CREATE TABLE IF NOT EXISTS books (
    //        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //        titolo VARCHAR(150) NOT NULL,
    //        autore VARCHAR(150) NOT NULL,
    //        anno_pubblicazione INT(4) NOT NULL,
    //        genere VARCHAR(150) NOT NULL
    //    )';
   
    //    if(!$mysqli->query($sql)) { 
    //        die($mysqli->connect_error); 
    //    }
   

    // --------------------------------------------------------------- //
    $utenti = [
        "nome" => isset($_REQUEST['firstname']) ? $_REQUEST['firstname'] : '',
        "cognome" => isset($_REQUEST['surname']) ? $_REQUEST['surname'] : '',
        "eta" => isset($_REQUEST['age']) ? $_REQUEST['age'] : '',
        "email" => isset($_REQUEST['email']) ? $_REQUEST['email'] : ''
    ];

    // prendiamo i dati dal form
    print_r($_REQUEST);
    if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'insert-db') {

        $nome = $utenti['nome'];
        $cognome = $utenti['cognome'];
        $eta = $utenti['eta'];
        $email = $utenti['email'];

        $sql = "INSERT INTO utenti (nome, cognome, eta, email) 
                VALUES ('$nome', '$cognome', '$eta', '$email');";

        if (!$mysqli->query($sql)) {
            echo ($mysqli->error);
        } else {
            echo 'Utente aggiunto con successo!!!';
        };
    }
    
    
    // seconda parte dell'esercizio
    if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'insert-csv') {
        $dir = 'file/';
        $file = 'utenti.csv';

        // creiamo la directory
        if(!file_exists($dir)) {
            mkdir($dir, 0777);
        } else {
            echo 'Directory esistente';
        }

        $result = [];
        $readDB = $mysqli->query("SELECT * FROM utenti");

        if($readDB) { 
            while ($row = $readDB->fetch_assoc()) { 
                $result[] = $row; 
            }
        }

        // scrittura del file
       $write = fopen($dir.$file, 'w');
       
       if($write) {
            foreach($result as $utente) {
                print_r($utente);
                fputcsv($write, $utente, ';');
                fclose($write);
            }
        }


        //  lettura file
        $read = fopen($dir.$file, 'r');
        while($data = fgetcsv($read)) {
            $admin[] = implode('', $data);
        }  fclose($read);

        print_r($admin);
    }


?>    