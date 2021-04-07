<html>
<head>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<?php
$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost',$user, $pass, $db) or die("unable to connect");

        if (isset($_GET['id'])){
            $id=$_GET['id'];
         // Delete data in mysql from row that has this id 
         $sql="DELETE FROM books WHERE book_id=$id";
         if(mysqli_query($db, $sql)){
             echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong> GREAT </strong> BOOK DELETED SUCCESSFULLY.
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>';
         }
        else{ 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($db); 
           }
          // if successfully deleted cool
        }   
?>
</html>