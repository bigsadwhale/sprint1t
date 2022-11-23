<?php

class Transport
{
	public int $wheels;
	public int $passengers;
	public float $speed;
	
	public function move()
	{
	    echo "Я еду с максимальной скоростью $this->speed км/ч и везу $this->passengers человек";
	}
	
    public function stop()
	{
	    echo "Я стою";
	}	

	public function setPassengers(int $n)
	{
		if($n > 0) {
			$this->passengers = $n;
		} else {
			echo "Надо хоть кого-то посадить в машину";
		}
	}    
}

class Truck extends Transport
{
	public float $maxLoad;
	
    public function move()
	{
	    echo "Я еду с максимальной скоростью $this->speed км/ч и везу груз массой $this->maxLoad тонн";
	}	
}

$ferrari->wheels = 4;
$ferrari->passengers = 2; // раз уж Феррари, то пусть будет шикарный двухместный родстер
$ferrari->speed = 300;

$lada->wheels = 4;
$lada->passengers = 5; // зато в практичную Ладу ещё четверых попутчиков можно посадить
$lada->speed = 130;

$ferrari->move(); // Я еду с максимальной скоростью 300 км/ч и везу 
$lada->move(); // Я еду с максимальной скоростью 130 км/ч

$kamaz = new Truck();
$kamaz->wheels = 6;
$kamaz->passengers = 3;
$kamaz->speed = 110;
$kamaz->maxLoad = 25.5;
$kamaz->move(); // Я еду с максимальной скоростью 110 км/ч и везу 3 человек