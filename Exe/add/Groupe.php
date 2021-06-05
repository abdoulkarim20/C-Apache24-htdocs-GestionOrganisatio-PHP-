<?php



require_once '../../config.php';
  
if(empty($_POST['nom']) || !preg_match('/^[a-z0-9A-Z_ ]+$/',$_POST['nom'])){

	 echo" <script>

             alert('Nom invalide');
             document.location.href='../../?C=groupe&M=add';

           </script>"; die();
   
 }






 
  else{
    $select="SELECT * FROM groupe WHERE nom=?";
    $sth=$dbc->prepare($select);
    $sth->execute([$_POST['nom']]);
    $user=$sth->fetch();

    if($user){
         echo" <script>
             alert('Ce groupe existe deja');
             document.location.href='../../?C=groupe&M=add';
             </script>"; die();
    }


  }




    if(!empty($_POST)){
      
      extract($_POST);


 $sth = $dbc->prepare("INSERT INTO groupe (nom,description)VALUES (?,?)");
 $sth->execute(array($nom,$description));
 
 if ($sth) {
     echo" <script>
             alert('Enregistrement effectuer avec success');
             document.location.href='../../?C=groupe&M=list';
             </script>"; die();
 }
 else{
  echo "error 404";
 }

    

     

    }


   




?>



