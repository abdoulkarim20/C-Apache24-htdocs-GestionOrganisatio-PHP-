<?php

session_start();


require_once '../../config.php';


    if(!empty($_POST)){
      
      extract($_POST);


        $sth = $dbc->prepare("INSERT INTO typeorganisation(libelle) VALUES (?)");
                
        $sth->execute(array($libelle));

 if ($sth) {

     echo" <script>
             alert('Enregistrement effectuer avec success');
             document.location.href='../../?C=typeorganisation&M=list';
             </script>"; die();
 }
 else{
  echo "error 404";
 }

    }


   





?>



