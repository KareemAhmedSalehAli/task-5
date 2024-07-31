<?php
  /*
    task -1 


class Circle {
    private $radius;
    private $color;


    public function __construct($radius, $color) {
        $this->radius = $radius;
        $this->color = $color;
    }


    public function setRadius($radius) {
        $this->radius = $radius;
    }


    public function getRadius() {
        return $this->radius;
    }


    public function setColor($color) {
        $this->color = $color;
    }


    public function getColor() {
        return $this->color;
    }


    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }


        public function calculateCircumference() {
        return 2 * pi() * $this->radius;
    }
}

// Example usage
$circle = new Circle(5, 'red');
echo "Radius: " . $circle->getRadius() . "\n";
echo "Color: " . $circle->getColor() . "\n";
echo "Area: " . $circle->calculateArea() . "\n";
echo "Circumference: " . $circle->calculateCircumference() . "\n";



/// 
Task -2

class Account {
    private $id;
    private $name;
    private $balance;

    public function __construct($id, $name, $balance = 8) {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function credit($amount) {
        $this->balance += $amount;
        return $this->balance;
    }

    public function debit($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Amount exceeded balance\n";
        }
        return $this->balance;
    }

    public function transferTo($anotherAccount, $amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            $anotherAccount->credit($amount);
        } else {
            echo "Amount exceeded balance\n";
        }
        return $this->balance;
    }

    public function __toString() {
        return "Account[id={$this->id}, name={$this->name}, balance={$this->balance}]";
    }
}

$Account = new Account(123,"kareem",8);
echo $Account;

*/






?>
