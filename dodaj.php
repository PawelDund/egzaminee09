<?php
    $tytul=$_POST['tytul'];
    $gatunek=$_POST['gatunek'];
    $rokp=$_POST['rokp'];
    $ocena=$_POST['ocena'];

    $connect = mysqli_connect('localhost','root','','dane');
    $query="INSERT INTO filmy (id, gatunki_id,tytul,rok,ocena) VALUES (NULL, '$gatunek', '$tytul', '$rokp', '$ocena')";
    $result = mysqli_query($connect, $query);
    echo 'Film '.$tytul.' został dodany do bazy';
    mysqli_close($connect)
?>