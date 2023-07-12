<?php 

    class email extends Comunicazione{
        public $allegato;
        private $notifica_invio;
        static public $coloredLed = 'Yellow';

        public function __construct(String $_mittente, String $_destinatario, String $_oggetto, String $_messaggio, Bool $_notifica_invio){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_messaggio);
            $this->notifica_invio = $_notifica_invio;
        }

        public function setAllegato($_allegato){
            $this->allegato = $_allegato;
        }

        public function getAllegato(){
            return $this->allegato;
        }


        public function getNotificaInvio(){
            return $this->notifica_invio;
        }

        public function inoltro(){
            return 'Email inoltrata';
        }

        public function stampa(){
            return 'Email stampata';
        }

        public function invio(){
            return 'Email inviata';
        }
    }

?>