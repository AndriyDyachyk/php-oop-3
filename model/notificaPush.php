<?php 

    class NotificaPush extends Comunicazione{
        private $visibile;
        private $icona;


        public function __construct(String $_mittente, String $_destinatario, String $_oggetto, String $_messaggio, Bool $_visibile, String $_icona){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_messaggio);
            $this->visibile = $_visibile;
            $this->icona = $_icona;
        }

        public function getVisible(){
            return $this->visibile;
        }

        public function getIcona(){
            return $this->icona;
        }

        public function risposta(){
            return 'notifica push inviata';
        }
        
        public function onClick(){
            return 'Apro l\'applicazione collegata alla notifica';
        }
    }

?>