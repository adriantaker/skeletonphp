<?php
namespace App\Controller;
/**
 * El namespace base 'ProjectPHP' se define en el composer.json
 * y si se cambia hay que hacer un composer install para volver
 * a generar el autoload con los cambios.
 * */

class HolaMundo {

    public $status_public='publicVarValue';
    protected $constructed_type="HolaMundo Unconstructed";
    public static $static_var = 'SoyStatic';

	// Constructor, se invocará automáticamente cuando se instancie esta clase --> new HolaMundo();
	public function __construct($data = "HolaMundo Constructed"){

		$this->constructed_type = $data;

		echo PHP_EOL."# Construyendo Objeto/Instancia de " . get_class($this). "\n".PHP_EOL;

	}

    // Visible desde cualquier sitio con/sin instanciar la clase
    public static function publicStaticHM(){
        echo self::$static_var . " [ejecutado -> publicStaticHM()]".PHP_EOL;
    }

    //Visible desde cualquier instancia/objeto de esta clase
	public function publicHM(){
        $this->constructed_type=$this->constructed_type." [ejecutado ->publicHM()]".PHP_EOL;
        echo  $this->constructed_type;
        self::$static_var='SoyStatic Modificado En/DentroDe Una Instancia u Objeto de la Clase: '.get_class($this);
	}


    //Visible dentro de esta clase (no en sus instancias/objetos) y dentro las clases que extiendan a esta.
	protected function _protectedHM () {
        $this->constructed_type=$this->constructed_type." [ejecutado -> _protectedHM()]".PHP_EOL;
        echo  $this->constructed_type;
	}

    //Visible SOLO dentro de esta clase (no en sus instancias/objetos), NO VISIBLE dentro las clases que extiendan a esta.
	private function _privateHM () {
        $this->constructed_type=$this->constructed_type." [ejecutado -> _privateHM()]".PHP_EOL;
        echo $this->constructed_type;
	}

	//Destructor, se ejecutará automaticamente(?) cuando no hayan más/otras referencias al objeto
    function __destruct() {
        echo PHP_EOL."# Destruyendo Objeto/Instancia de " . get_class($this). "\n";
    }

}
