<?php

    class Comunicazione{
        private $mittente;
        private $destinatario;
        private $oggetto;
        private $messaggio;
        public static $suoneria = 'DRIIIIIIN';

        public function __construct(String $_mittente, String $_destinatario, String $_oggetto, String $_messaggio){
            $this->mittente = $_mittente;
            $this->destinatario = $_destinatario;
            $this->oggetto = $_oggetto;
            $this->messaggio = $_messaggio;
        }

        public function getMittente(){
            return $this->mittente;
        }

        public function getDestinatario(){
            return $this->destinatario;
        }

        public function getOggetto(){
            return $this->oggetto;
        }

        public function getMessaggio(){
            return $this->messaggio;
        }

        public function invio(){
            return 'comunicazione inviata';
        }
    }
?>