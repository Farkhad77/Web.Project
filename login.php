<?php
if(isset($_POST["password"],$_POST["email"])&&
$_POST["password"]=="********"&&
$_POST["email"]=="**********"
){
    
    echo '<script>alert("HOS GELDINIZ B231210568 kullanicisi")</script>';
    echo '<script>window.location.href = "hakkimda.html";</script>';
}
else{
 echo "yanlish sifre veya email lutfen tekrar deneyiniz...";
 echo '<a href="Kayitol.html">Geri don</a>';
 echo '<style>a:hover{color:red }</style>';
}


?>
