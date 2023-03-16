<?php
declare(strict_types = 1);
class Person {
    private string $name;
    private int $alter;

    public function __construct(string $name, int $alter) {
        $this->name = $name;
        $this->alter = $alter;
    }


    public function getName():string {
        return $this->name;
    }

    public function getAlter():int {
        return $this->alter;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setAlter(int $alter) {
        $this->alter = $alter;
    }

    public function __toString() {
        return "Name: " .
        $this->name. ", Alter: "  .$this->alter. "\n"; 
    } 
} 
  
// Beispielobjekte erstellen 
$person1 = new Person("Max Mustermann", 25); 
$person2 = new Person("Athur Dent", 42); 
  
// Beispielobjekte ausgeben 
echo "<h1>Person 1: $person1</h1>\n"; 
  
echo "<h1>Person 2: $person2</h1>\n";