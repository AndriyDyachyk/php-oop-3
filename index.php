<?php 
require_once __DIR__.'/model/comunicazione.php';
require_once __DIR__.'/model/email.php';
require_once __DIR__.'/model/allegato.php';
require_once __DIR__.'/model/sms.php';
require_once __DIR__.'/model/notificaPush.php';

$emails=[
    new email('Tu', 'Mimmo', 'Saluti', 'Ciao Mimmo, come stai?', true),
    new email('Claudio', 'Samuele', 'Saluti', 'Ciao Claudio, come stai?', false),

];

$allegato = new Allegato('disegno 324', 'PDF', 20);

$smsses=[
    new SMS('Tu', 'Massimo', 'Barzelletta', 'Sono triste, non ne conosco', false, true),
    new SMS('Alfredo', 'Carlo', 'Invito', 'Domani è il mio compleanno e sei invitato alla festa', true, true)
];

$notifica_push = new NotificaPush('Fabrizio','Mastrobattista','Notifica push per \'app di Mario','contenuto', true, 'icona');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($emails as $email):?>
    <div>
        <p>
            <?php echo "Mittente: ".$email->getMittente()?>
        </p>
        <p>
            <?php echo "Destinatario: ".$email->getDestinatario()?>
        </p>
        <p>
            <?php echo "Oggetto: ".$email->getOggetto()?>
        </p>
        <p>
            <?php echo "Messaggio: ".$email->getMessaggio()?>
        </p>
        <p>
            <?php echo "Notifica Inoltro: ".$email->inoltro()?>
        </p>
        <p>
            <?php echo "Notifica Stampa: ".$email->stampa()?>
        </p>
        <p>
            <?php echo "Notifica Invio: ".$email->invio()?>
        </p>
        <p <?php if($email->getNotificaInvio())?>>
            <?php echo "L'email è stata inviata correttamente"?>
        </p>
        <p>
            <?php echo $email->setAllegato($allegato); 
            echo "Allegato: ".$email->allegato->getNome()." - ".$email->allegato->getTipo()." - ".$email->allegato->getDimensione()." MB"?>
        </p>
        <p>
            <?php echo "Suoneria: ".email::$suoneria ?>
        </p>
        <p>
            <?php echo "LED: ".email::$coloredLed ?>
        </p>
    </div>
    <hr>
    <?php endforeach;?>
    <?php foreach($smsses as $sms): ?>
    <div>
        <p>
            <?php echo "Mittente: ".$sms->getMittente()?>
        </p>
        <p>
            <?php echo "Destinatario: ".$sms->getDestinatario()?>
        </p>
        <p>
            <?php echo "Oggetto: ".$sms->getOggetto()?>
        </p>
        <p>
            <?php echo "Messaggio: ".$sms->getMessaggio()?>
        </p>
        <p <?php if($sms->getNotificaLettura())?>>
            <?php echo "Il messaggio è stato letto"?>
        </p>
        <p>
            <?php echo "Stato invio: ".$sms->invio()?>
        </p>
        <p <?php if($sms->getNotificaRisposta())?>>
            <?php echo $sms->risposta()?>
        </p>
        <p>
            <?php echo "LED: ".sms::$coloredLed ?>
        </p>
    </div>
    <hr>
    <?php endforeach; ?>
    <div>
        <p>
            <?php echo "Mittente: ".$notifica_push->getMittente()?>
        </p>
        <p>
            <?php echo "Destinatario: ".$notifica_push->getDestinatario()?>
        </p>
        <p>
            <?php echo "Oggetto: ".$notifica_push->getOggetto()?>
        </p>
        <p>
            <?php echo "Messaggio: ".$notifica_push->getMessaggio()?>
        </p>
        <?php echo $notifica_push->getVisible() ? 'la notifica è visibile' :'la notifica non è visibile'?>
        <p>
            <?php echo "Icona: ".$notifica_push->getIcona()?>
        </p>
        <p>
            <?php echo "Suoneria: ".NotificaPush::$suoneria ?>
        </p>
    </div>
</body>
</html>