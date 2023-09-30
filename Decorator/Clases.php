<?php

interface Vendible{

	public function getDescripion();
	public function getPrecio();
}

abstract class Burger implements Vendible{

	public $tipo,$precio;

}

class Cuartel extends Burger{

	public function getDescripion(){
		return "Hamburguesa Cuartel";
	}

	public function getPrecio(){
		return 7000;
	}
}

class Todoterreno extends Burger{
	public function getDescripion(){
		return "Hamburguesa Todo Terreno";
	}

	public function getPrecio(){
		return 10000;
	}
}

abstract class BurgerDecorator implements Vendible{

	public $vendible;

	public function __construct($vendible){
		$this->vendible=$vendible;
	}
}

class Tocineta extends BurgerDecorator{

	public function __construct($vendible){
		parent::__construct($vendible);
	}

	public function getDescripion(){
		return $this->vendible->getDescripion() . " Con tocineta";

	}

	public function getPrecio(){
		return $this->vendible->getPrecio() + 2000;
	}
}

class Queso extends BurgerDecorator{

	public function __construct($vendible){
		parent::__construct($vendible);
	}

	public function getDescripion(){
		return $this->vendible->getDescripion() . " con queso";
	}

	public function getPrecio(){
		return $this->vendible->getPrecio() + 1000;
	}
}

class Cebolla extends BurgerDecorator{

	public function __construct($vendible){
		parent::__construct($vendible);
	}

	public function getDescripion(){
		return $this->vendible->getDescripion() . " con Cebolla grille";
	}

	public function getPrecio(){
		return $this->vendible->getPrecio() + 1500;
	}
}

?>