<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Your code here -->
        <?php
        // aqui se asigna la clase Dog
        class Dog {
            // declaración de variable y asignacion de valores
            public $numLegs=4;
            public $name;
            // funcion que obtiene el nombre del perro, es necesario hacer las funciones publicas
            public function __construct($name)
            {
                $this->name=$name;
                $this->numLegs=$numLegs;
            }
            // no es necesario declarar el parametro de entrada del nombre debido a que 
           
            public function greet(){
                return "Hello, my name is " . this->name . ". Nice to meet you! :-)";   
            }
        }
        $dog1 = new Dog("Zazil");
        $dog
        ?>
      </p>
    </body>
</html>