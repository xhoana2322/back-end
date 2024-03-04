<?php

    interface Prestito {
        public function presta();
        public function resituisci();
    }

    abstract class MaterialeBibliotecario implements Prestito {

        public static $contatoreMateriali = 0;

        public function presta() {
            return self::$contaLibri--;
        }
        public function resituisci() {
            return self::$contaDVD++;
        }

    }


    class Libro extends MaterialeBibliotecario {
        public static $contaLibri = 0;
        public $titolo;
        public $autore;
        public $annoPubblicazione;

        public function __construct($titolo, $autore, $annoPubblicazione) {
            $this->titolo = $titolo;
            $this->autore = $autore;
            $this->annoPubblicazione = $annoPubblicazione;
            self::$contaLibri++;
            parent::presta();

            echo "Tot Libri: " . self::$contaLibri;
        }
    }

    class DVD extends MaterialeBibliotecario {
        public static $contaDVD = 0;
        public $titolo;
        public $regista;
        public $annoPubblicazione;

        public function __construct($titolo, $regista, $annoPubblicazione) {
            $this->titolo = $titolo;
            $this->regista = $regista;
            $this->annoPubblicazione = $annoPubblicazione;
            self::$contaDVD++;
            parent::presta();

            echo "Tot DVD: " . self::$contaDVD;
        }
    }

    $l1 = new Libro("Il Signore degli Anelli", "Tolkien", "2000");
    $d1 = new DVD("Dune", "Spielberg", "2000");


    