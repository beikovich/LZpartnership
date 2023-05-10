<?php

//получение данных с элементов формы

    $Your_email = $_POST['Your_email'];
    $Your_Twitter_account = $_POST['Your_Twitter_account'];
    $Your_Website = $_POST['Your_Website'];
    $Your_Media_Kit = $_POST['Your_Media_Kit'];
    $Your_Medium = $_POST['Your_Medium'];
    $Your_Discord = $_POST['Your_Discord'];
    
    
//обработка полученных данных
    
    $Your_email = htmlspecialchars($Your_email);
    $Your_Twitter_account = htmlspecialchars($Your_Twitter_account);
    $Your_Website = htmlspecialchars($Your_Website);
    $Your_Media_Kit = htmlspecialchars($Your_Media_Kit);
    $Your_Medium = htmlspecialchars($Your_Medium);
    $Your_Discord = htmlspecialchars($Your_Discord);
    
    $Your_email = urldecode($Your_email);
    $Your_Twitter_account = urldecode($Your_Twitter_account);
    $Your_Website = urldecode($Your_Website);
    $Your_Media_Kit = urldecode($Your_Media_Kit);
    $Your_Medium = urldecode($Your_Medium);
    $Your_Discord = urldecode($Your_Discord);
    
    $Your_email = trim($Your_email);
    $Your_Twitter_account = trim($Your_Twitter_account);
    $Your_Website = trim($Your_Website);
    $Your_Media_Kit = trim($Your_Media_Kit);
    $Your_Medium = trim($Your_Medium);
    $Your_Discord = trim($Your_Discord);
    
    
//отправка данных на почту

    if (mail("ecosystem@layerzero.news",
            "Website layerzero",
            "Email: ".$Your_email."\n".
            "Twitter: ".$Your_Twitter_account."\n".
            "Website: ".$Your_Website."\n".
            "Media Kit: ".$Your_Media_Kit."\n".
            "Medium: ".$Your_Medium."\n".
            "Discord: ".$Your_Discord."\n")
            
    ){
        echo ('Your form is successfully submitted!');
        
    }
    
    else {
        echo ('Please check the data - there are some mistakes!');
    }

    

?>
