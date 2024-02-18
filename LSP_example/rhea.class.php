<?php
use \LSP_Bird\Bird;

class Rhea extends Bird {
    function tweet(){
        return 'I can tweet';
    }
    function fly(){
        throw New Exception("I can't fly");
    }
}

