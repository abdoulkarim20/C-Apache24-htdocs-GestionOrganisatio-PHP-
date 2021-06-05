<?php

session_start();


require_once '../../config.php';
  
if(empty($_POST['nom']) || !preg_match('/^[a-z0-9A-Z_ ]+$/',$_POST['nom'])){

   echo" <script>

             alert('Nom invalide');
             document.location.href='../../?C=membre&M=add';

           </script>"; die();
   
 }

 if(empty($_POST['prenoms']) || !preg_match('/^[a-z0-9A-Z_ ]+$/',$_POST['prenoms'])){

   echo" <script>

             alert('Prenoms invalide');
             document.location.href='../../?C=membre&M=add';

           </script>"; die();
   
 }
  if(empty($_POST['telephone'])){

   echo" <script>

             alert('telephone invalide');
             document.location.href='../../?C=membre&M=add';

           </script>"; die();
   
 }



  if(empty($_POST['email'])|| !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
     echo" <script>

             alert('Email invalide. Il doit etre de type email');
             document.location.href='../../?C=membre&M=add';

           </script>"; die();

  }else{
    $select="SELECT * FROM membres WHERE email=?";
    $sth=$dbc->prepare($select);
    $sth->execute([$_POST['email']]);
    $user=$sth->fetch();

    if($user){
         echo" <script>
             alert('Email existant');
             document.location.href='../../?C=membre&M=add';
             </script>"; die();
    }

  } if(empty($_POST['adresse'])){

   echo" <script>

             alert('adresse invalide');
             document.location.href='../../?C=membre&M=add';

           </script>"; die();
   
 }
  

    if(!empty($_POST)){

      extract($_POST);

        $sth = $dbc->prepare("INSERT INTO membres(nom,prenoms,telephone,email,adresse,organisations_name) VALUES (?,?,?,?,?, ?)");
                
        $sth->execute(array($nom,$prenoms,$telephone,$email,$adresse,$organisations_name));

 if ($sth) {
   
     echo" <script>
             alert('Enregistrement effectuer avec success');
             document.location.href='../../?C=membre&M=list';
             </script>"; die();
 }
 else{
  echo "error 404";
 }

    

     

    }


   




?>



