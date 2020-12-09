<?php

if (isset($_POST['valider'])) {
    $nomArticle=$_post['nomArticle'];
    $typeArticle=$_post['typeArticle'];
    $prixAchat=$_post['prixAchat'];
    $prixVente=$_post['prixVente'];
    $nombers=$_post['nombers'];
    $dateEntree=$_post['dateEntree'];


    $con=@mysqli_connect("localhost","root","") or die (@mysqli_error());
    $db=@mysqli_select_db($con,"yougouslavie") or die (@mysqli_error($con));
    $stat="INSERT into stock_depot values(0,'$nomArticle','$typeArticle','$prixAchat','$prixVente','$nombers','$dateEntree')";
    $result=@mysqli_execute_query($con,$stat) or die (@mysqli_error($con));
    $close=@mysqli_close($con);
}




?>
