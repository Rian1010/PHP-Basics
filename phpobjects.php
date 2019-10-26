<?php
	class MyClass{
		protected $foo;

		public function __construct($foo) {
			$this->foo = $foo;
		}

		public function displayFoo() {
			echo $this->foo;
		}
	}

	$myInstance = new MyClass("This is instance 1.");
	$myInstance2 = new MyClass("This is instance 2.");


	$myInstance -> displayFoo();
	echo "<br>";
	$myInstance2 -> displayFoo();
	echo "<br>";

	class Cube {
		//in metres
		protected $length;

		public function __construct($length) {
			$this->length = $length;
		}

		public function getLength() {
			return $this->length." metres";
		}
		public function extend($length) {
			$this->length = $this->length+$length;
		}
		//Area
		public function getSurfaceArea() {
			return 6*$this->length*$this->length." metres squared";
		}
		//Volume
		public function getVolume() {
			return $this->length*$this->length*$this->length." metres cubed";
		}

	}

	$myLargeCube = new Cube (123);

	echo $myLargeCube->getLength();
	$myLargeCube->extend(100);
	echo $myLargeCube->getLength();