<?php

session_start();


require_once '../../config.php';
  
if(empty($_POST['nom'])){

   echo" <script>

             alert('Nom invalide');
             document.location.href='../../?C=organisation&M=add';

           </script>"; die();
   
 }

 if(empty($_POST['ZoneIntervention'])){

   echo" <script>

             alert('ZoneIntervention invalide');
             document.location.href='../../?C=organisation&M=add';

           </script>"; die();
   
 }if(empty($_POST['theme'])){

   echo" <script>

             alert('theme invalide');
             document.location.href='../../?C=organisation&M=add';

           </script>"; die();
   
 }




 if(empty($_POST['contact'])){

   echo" <script>

             alert('contact invalide');
             document.location.href='../../?C=organisation&M=add';

           </script>"; die();

  }if(empty($_POST['adresse'])){

   echo" <script>

             alert('adresse invalide');
             document.location.href='../../?C=organisation&M=add';

           </script>"; die();}  

    if(!empty($_POST)){

      extract($_POST);

        $sth = $dbc->prepare("INSERT INTO organisations(nom,ZoneIntervention,theme,contact,adresse,type_organisations) VALUES (?,?,?,?,?, ?)");
                
        $sth->execute(array($nom,$ZoneIntervention,$theme,$contact,$adresse,$type_organisations));

 if ($sth) {
   
     echo" <script>
             alert('Enregistrement effectuer avec success');
             document.location.href='../../?C=organisation&M=list';
             </script>"; die();
 }
 else{
  echo "error 404";
 }

    

     

    }


   




?>



