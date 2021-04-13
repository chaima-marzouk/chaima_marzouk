


<?php    
 include_once('database.php'); 


    if(isset($_POST['creat']) && !empty($_POST['email']) && !empty($_POST['password'])){  
         
         $email = $_POST['email'];       
         $password = $_POST['password'];        
         $id= $_POST['id'];        
         $updat="UPDATE sighnin SET email='$email',password='$password' WHERE id=$id";       
         $query=mysqli_query($link,$updat);       
         
    if($query) {   

               header('location:admin.php');

         } 
         
    
         } 
?>