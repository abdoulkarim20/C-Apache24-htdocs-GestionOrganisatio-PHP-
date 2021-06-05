<?php


require_once '../../config.php';
  
if(empty($_POST['nom']) || !preg_match('/^[a-z0-9A-Z_ ]+$/',$_POST['nom'])){

	 echo" <script>

             alert('Nom invalide');
             document.location.href='../../?C=user&M=add';

           </script>"; die();
   
 }

 if(empty($_POST['Prenoms']) || !preg_match('/^[a-z0-9A-Z_ ]+$/',$_POST['Prenoms'])){

   echo" <script>

             alert('Prenoms invalide');
             document.location.href='../../?C=user&M=add';

           </script>"; die();
   
 }



  if(empty($_POST['username'])|| !filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
     echo" <script>

             alert('Username invalide. Il doit etre de type email');
             document.location.href='../../?C=user&M=add';

           </script>"; die();

  }else{
    $select="SELECT * FROM users WHERE username=?";
    $sth=$dbc->prepare($select);
    $sth->execute([$_POST['username']]);
    $user=$sth->fetch();

    if($user){
         echo" <script>
             alert('Username ou Login existant');
             document.location.href='../../?C=user&M=add';
             </script>"; die();
    }


  }

if(empty($_POST['password'])|| $_POST['password']!=$_POST['password1']){ 

         echo" <script>
                   alert('Les deux mot de passe doivent etre les memes');
                   document.location.href='../../?C=user&M=add';
                   </script>"; die();

} 



    if(!empty($_POST)){
      
      extract($_POST);


 $sql="INSERT INTO users (Groupe_User,nom,Prenoms,genre,username,password)
 VALUES ('$Groupe_User','$nom','$Prenoms','$genre','$username','$password')";
 $dbc->exec($sql);
 
 if ($sql) {
     echo" <script>
             alert('Enregistrement effectuer avec success');
             document.location.href='../../?C=user&M=list';
             </script>"; die();
 }
 else{
  echo "error 404";
 }



}

    

     




?>



