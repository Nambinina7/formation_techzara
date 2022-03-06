<?php
    class Wolsewagen implements Car {
        public $color = "red";
        protected $year  =  "2000";
        private  $fuel = "Gazoil";

        public function getColor()
        {
            return $this->color;
        }

        public function setColor($color)
        {
            $this->color = $color;

            return $this;
        }

        public function getYear()
        {
            return $this->year;
        }

        public function setYear($year)
        {
            $this->year = $year;

            return $this;
        }

        public function getFuel()
        {
            return $this->fuel;
        }

        public function setFuel($fuel)
        {
            $this->fuel = $fuel;

            return $this;
        }

        public function getMotor()
        {
            return "diesel 250cv";
        }
    }

    class Passant extends Wolsewagen
    {
        
    }

    interface Car
    {
        public function getMotor();
    }


    $Wolsewagen = new Wolsewagen();
    $passant  = new Passant();
    $Wolsewagen->setFuel("eau");
    $Wolsewagen->setColor("rouge");


    echo "La couleur de la voiture est"." ".$Wolsewagen->getColor()." " ."moteur"." ".$Wolsewagen->getMotor()." "."année"." ".$passant->getYear()." "."energie"." ".$Wolsewagen->getFuel().".";