<?php 
/**
 * main file
 *
 * @author Suraj Gujar
 * @email mr.surajgujar@gmail.com
 * @version 1.0
 */

// include all the library files
include "lib/circle.php";
include "lib/polygone.php";
include "lib/square.php";
include "lib/rectangle.php";
include "lib/ellipse.php";

// main app class
class App {
	/**
	 * keeps user choice input
	 * @var string $choice
	 */
	protected $choice;

	/**
	 * main shape object to create new shapes
	 * @var object $shape
	 */
	protected $shape;

	/**
	 * determine form submition
	 * @var string $submit
	 */
	protected $submit;

	/**
	 * determine form submition
	 * @var array $params
	 */
	protected $params;

	/**
	 * result =
	 * @var array $result
	 */
	protected $result;

	
	function __construct()
	{
		// initialize vars
		$this->choice = '';
		$this->submit = '';
		$this->shape = null;
		$this->params = [];
		$this->result = null;
	}

	/**
	 * function that executes the application
	 */
	public function run()
	{
		if(isset($_POST['submit']) && !empty($_POST['submit'])) {
			$this->submit = $_POST['submit'];
			$this->choice = $_POST['shape']??'';
		}
		if($this->submit == 'Go to step 3') {
			$this->params = $_POST['params'];
			switch ($this->choice) {
				case 'Circle':
					$this->calculateCircle();
					break;
				case 'Rectangle':
					$this->calculateRectangle();
					break;
				case 'Square':
					$this->calculateSquare();
					break;
				case 'Ellipse':
					$this->calculateEllipse();
					break;
			}
		}
		include("form.php");
	}

	/**
	 * function for calculating circle area
	 */
	protected function calculateCircle()
	{
		$this->shape = new Circle;

		$radius = $this->params['radius'];

		$this->shape->setRadius($radius);
		$result = $this->shape->getArea();

		$this->result = round($result, 2);
	}

	/**
	 * function for calculating rectangle area
	 */
	protected function calculateRectangle()
	{
		$this->shape = new Rectangle;

		$width = $this->params['width'];
		$length = $this->params['length'];

		$this->shape->setWidth( $width );
		$this->shape->setLength( $length );
		$result = $this->shape->getArea();

		$this->result = round($result, 2);
	}

	/**
	 * function for calculating square area
	 */
	protected function calculateSquare()
	{
		$this->shape = new Square;

		$side = $this->params['side'];

		$this->shape->setSide( $side );
		$result = $this->shape->getArea();

		$this->result = round($result, 2);
	}

	/**
	 * function for calculating ellipse area
	 */
	protected function calculateEllipse()
	{
		$this->shape = new Ellipse;

		$a_axis = $this->params['a_axis'];
		$b_axis = $this->params['a_axis'];

		$this->shape->setAAxis($a_axis);
		$this->shape->setBAxis($b_axis);
		$result = $this->shape->getArea();

		$this->result = round($result, 2);
	}
}

// initialize and run the app
(new App)->run();
