
<?php
class Person {
    private $vorname;
    private $nachname;
    private $alter;
    private $geschlecht;

    public function __construct($vorname, $nachname, $alter, $geschlecht) {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->alter = $alter;
        $this->geschlecht = $geschlecht;
    }

    public function getVorname() {
        return $this->vorname;
    }

    public function getNachname() {
        return $this->nachname;
    }

    public function getAlter() {
        return $this->alter;
    }

    public function getGeschlecht() {
        return $this->geschlecht;
    }

    public function setVorname($vorname) {
        $this->vorname = $vorname;
    }

    public function setNachname($nachname) {
        $this->nachname = $nachname;
    }

    public function setAlter($alter) {
        $this->alter = $alter;
    }

    public function setGeschlecht($geschlecht) {
        $this->geschlecht = $geschlecht;
    }

    public function __toString() {
        return "Vorname: " .
        $this->vorname. ", Nachname: " .$this->nachname. ", Alter: " .$this->alter. ", Geschlecht: " .$this->geschlecht. "\n"; 
    } 
} 
  
// Beispielobjekte erstellen 
$person1 = new Person("Max", "Mustermann", 25, "männlich"); 
$person2 = new Person("Susi", "Musterfrau", 23, "weiblich"); 
  
// Beispielobjekte ausgeben 
echo "<h1>Person 1: $person1</h1>\n"; 
  
echo "<h1>Person 2: $person2</h1>\n";