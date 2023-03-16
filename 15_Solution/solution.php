
<?php
class Konto {  
    private $kontonummer;  
    private $kontostand;  

    public function __construct($kontonummer,$kontostand) {  
        $this->kontonummer = $kontonummer;  
        $this->kontostand = $kontostand;  
    }  

    public function getKontonummer() {  
        return $this->kontonummer;  
    }  

    public function setKontonummer($kontonummer) {  
        $this->kontonummer = $kontonummer;  
    }  

    public function getKontostand() {  
        return $$this->kontostand;  
    }  

    public function setKontostand($kontostand) {  
        $$this->kontostand = $kontostand;  
    }  
}  
class Person {
    private $vorname;
    private $nachname;
    private $geburtsdatum;
    private $adresse;

    public function __construct($vorname,$nachname,$geburtsdatum,$adresse) {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->geburtsdatum = $geburtsdatum;
        $this->adresse = $adresse;
    }

    public function getVorname() {
        return $this->vorname;
    }

    public function getNachname() {
        return $this->nachname;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getGeburtsdatum() {
        return $this->geburtsdatum;
    }

    public function setVorname($vorname) {
        $this->vorname = $vorname;
    }

    public function setNachname($nachname) {
        $this->nachname = $nachname;
    }

    public function setGeburtsdatum($geburtsdatum) {
        $this->geburtsdatum = $geburtsdatum;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

} 


// Mitarbeiter
class Mitarbeiter extends Person { 

    private $mitarbeiternummer; 

    public function __construct($vorname,$nachname,$geburtsdatum,$adresse,$mitarbeiternummer) { 

        parent::__construct($vorname,$nachname,$geburtsdatum,$adresse); 

        $this->mitarbeiternummer = $mitarbeiternummer; 

    } 

    public function getMitarbeiternummer() { 

        return $this->mitarbeiternummer; 

    } 

    public function setMitarbeiternummer($mitarbeiternummer) { 

        $this->mitarbeiternummer = $mitarbeiternummer; 

    }  
}  

class Kunde extends Person { 

    private $kundennummer; 
    public $konto;
    public $mitarbeiter;

    public function __construct($vorname,$nachname,$geburtsdatum,$adresse,$kundennummer,$konto,$mitarbeiter) { 

        parent::__construct($vorname,$nachname,$geburtsdatum,$adresse); 

        $this->kundennummer = $kundennummer; 
        $this->konto=$konto;
        $this->mitarbeiter=$mitarbeiter;

    } 

    public function getKundennummer() { 

        return $this->kundennummer; 

    } 

    public function setKundennummer($kundennummer) { 

        $this->kundennummer = $kundennummer; 

    } 
} 

// Beispielobjekte erstellen 
$person1 = new Person("Max", "Mustermann", "25.01.1999", "12456 Irgendwo, Irgendeinweg 123"); 
$person2 = new Person("Susi", "Muster", ".12.2001", "76543 Sonstwo, In der Strasse 666"); 
$mitarbeiter1 = new Mitarbeiter("Athur", "Dent", "01.01.1980", "99999 Galaxis, Milchstrasse 42", 54321);  
$konto1 = new Konto(12345, 1000);
$konto2 = new Konto(67890, 3000);
$kunde1 = new Kunde("Ford", "Prefect", "01.01.1901", "Beteigeuze 7", 12345,$konto1,$mitarbeiter1);
// Beispielobjekte ausgeben 
var_dump($person1);
echo "<hr />\n";
var_dump($mitarbeiter1);
echo "<hr />\n";
var_dump($konto1);
echo "<hr />\n";
var_dump($kunde1);
?>