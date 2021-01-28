<?php
header("content-type: application/json; charset=utf-8");
$name=isset($_POST['name']) ? $_POST['name'] : "";
$email=isset($_POST['email']) ? $_POST['email'] : "";
$phone=isset($_POST['phone']) ? $_POST['phone'] : "";
$datepicker=isset($_POST['datepicker']) ? $_POST['datepicker'] : "";
$datepicker1=isset($_POST['datepicker1']) ? $_POST['datepicker1'] : "";
$zczyo=isset($_POST['zczyo']) ? $_POST['zczyo'] : "";
$lpeln=isset($_POST['lpeln']) ? $_POST['lpeln'] : "";
$miejsce=isset($_POST['miejsce']) ? $_POST['miejsce'] : "";
$ldzieci=isset($_POST['ldzieci']) ? $_POST['ldzieci'] : "";
$wyzywienie=isset($_POST['wyzywienie']) ? $_POST['wyzywienie'] : "";
$Plh=isset($_POST['Plh']) ? $_POST['Plh'] : "";
$Pl1km=isset($_POST['Pl1km']) ? $_POST['Pl1km'] : "";
$PPL=isset($_POST['PPL']) ? $_POST['PPL'] : "";
$PR=isset($_POST['PR']) ? $_POST['PR'] : "";
$AH=isset($_POST['AH']) ? $_POST['AH'] : "";
$KL=isset($_POST['KL']) ? $_POST['KL'] : "";
$CO=isset($_POST['CO']) ? $_POST['CO'] : "";
$Telk=isset($_POST['Telk']) ? $_POST['Telk'] : "";
$EMAILk=isset($_POST['EMAILk']) ? $_POST['EMAILk'] : "";
$P7d=isset($_POST['P7d']) ? $_POST['P7d'] : "";
$P10d=isset($_POST['P10d']) ? $_POST['P10d'] : "";
$P14d=isset($_POST['P14d']) ? $_POST['P14d'] : "";
$lot=isset($_POST['lot']) ? $_POST['lot'] : "";
$H18=isset($_POST['H18']) ? $_POST['H18'] : "";
$uwagi=isset($_POST['uwagi']) ? $_POST['uwagi'] : "";

if($name && $email && $phone){
    $headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: 8bit";
    $message_body="Formularz wycieczki wysłany ze strony ****\n";
    $message_body.="Imię i nazwisko: $name\n\n";
    $message_body.="Adres email: $email\n\n";
    $message_body.="Telefon: $phone\n\n";
    $message_body.="Data wylotu !MM/DD/RRRR!: $datepicker\n\n";
    $message_body.="Data przylotu !MM/DD/RRRR!: $datepicker1\n\n";
    $message_body.="Długość pobytu 7: $P7d\n\n";
    $message_body.="Długość pobytu 10/11: $P10d\n\n";
    $message_body.="Długość pobytu 14: $P14d\n\n";
    $message_body.="ZWIEDZANIE CZY ODPOCZYNEK: $zczyo\n\n";
    $message_body.="Lotnisko: $lot\n\n";
    $message_body.="PREFEROWANY KIERUNEK: $miejsce\n\n";
    $message_body.="WIEK DZIECI: $ldzieci\n\n";
    $message_body.="LICZBA PELNOLETNICH UCZESTNIKÓW: $lpeln\n\n";
    $message_body.="WYŻYWIENIE: $wyzywienie\n\n";
    $message_body.="PLAŻA BEZPOŚREDNIO PRZY HOTELU: $Plh\n\n";
    $message_body.="PLAŻA DO 1km OD HOTELU: $Pl1km\n\n";
    $message_body.="PIASZCZYSTA PLAŻA: $PPL \n\n";
    $message_body.="POKÓJ RODZINNY: $PR \n\n";
    $message_body.="AQUAPARK W HOTELU: $AH \n\n";
    $message_body.="KRÓTKI LOT: $KL \n\n";
    $message_body.="HOTEL +18: $H18 \n\n";
    $message_body.="CICHA OKOLICA: $CO \n\n";
    $message_body.="Dodatkowe uwagi: $uwagi \n\n";
    $message_body.="KLIENT PROSI O KONTAKT TELEFONICZNY:: $Telk \n\n";
    $message_body.="KLIENT PROSI O KONTAKT EMAILEM: $EMAILk \n\n\n\n";
     $message_body.="CREATED BY JAN ADAMSKI 2021";
    if(mail("****","****",$message_body,$headers) && mail("****","****",$message_body,$headers)){
        $json=array("status"=>1,"msg"=>"<p class='status_ok'>Twoje zgłoszenie zostało pomyślnie wysłane. Odezwiemy się do Ciebie najszybciej jak to będzie możliwe!</p>");
    }
else{
        $json=array("status"=>0,"msg"=>"<p class='status_err'>Wystąpił problem z wysłaniem formularza.</p>");
    }
}
else{
 $json=array("status"=>0,"msg"=>"<p class='status_err'>Proszę wypełnić wszystkie pola przed wysłaniem.</p>"); 
}
echo json_encode($json);
exit;
?>