<?php 

    class SMS extends Comunicazione{
        private $notifica_lettura;
        private $notifica_risposta;
        static public $coloredLed = 'Green';


        public function __construct(String $_mittente, String $_destinatario, String $_oggetto, String $_messaggio, Bool $_notifica_lettura, Bool $_notifica_risposta){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_messaggio);
            $this->notifica_lettura = $_notifica_lettura;
            $this->notifica_risposta = $_notifica_risposta;
        }

        public function getNotificaLettura(){
            return $this->notifica_lettura;
        }

        public function getNotificaRisposta(){
            return $this->notifica_risposta;
        }

        public function invio(){
            return 'SMS inviato';
        }

        public function risposta(){
            return 'Ti rispondo subito';
        }
    }

?>