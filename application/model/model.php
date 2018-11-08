<?php
class Model {

	public $dbhandle;

	public function __construct()
	{

		$dsn = 'sqlite:./db/test1.db';

		try {

			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
														PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
														PDO::ATTR_EMULATE_PREPARES => false,
														));
		}

		catch (PDOEXception $e){
			echo "I'm sorry, Martin, I'm afraid I can't connect to the database!";

			print new Exception($e->getMessage());
		}
	}

	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("DROP TABLE IF EXISTS Model_3D");

			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, title TEXT, subtitle TEXT, 
			decription TEXT, webdesign TEXT, modeldate TEXT, artist TEXT, material TEXT,
			dimensions TEXT, museum TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}

		catch (PDOEXception $e){
			print new Exception($e->getMessage());
		}
		///$this->dbhandle = NULL; 
	}

	public function dbInsertData()
	{
		try {
			$this->dbhandle->exec(
				"INSERT INTO Model_3D (Id, title, subtitle, decription)
					VALUES (1, 'Art Nouveau Vases around the globe','','The theme that I have gone for Art Nouveau Vases. I have selected four different shaped objects and recreated them using 3D modelling. I have created my own exhibition space for these vases.'); " .
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription)
					VALUES (2, 'China Vase','Made in 18th century','Porcelain covered with flambé glaze'); " .
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription)
					VALUES (3, 'Favrile Vase','Designed around 1800','Its name probably comes from fabrile an old English word for handmade, indicating that the range was made by skilled glass workers.'); " .
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription)
					VALUES (4, 'Fennia','Designed 1900 - 1902','Cast white earthenware vase of six-sided bottle shape, printed and hand-painted with geometric plant-like forms in stylised panels in green and reddish brown.'); " .
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription)
					VALUES (5, 'Clutha Vase','Made in Glasgow','Clutha is the ancient, Romans name for a river god and the River Cycle. The vase was made by James Couper & Sons in Glasgow, which stands on the Clyde.'); " .
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription, webdesign)
					VALUES (6, 'China Vase','Made in China','This model was made using 3DS max and the texture was taken from an image of the model. Using the camera buttons, animation buttons and Render I can change the position, add animation and remove the lighting and poly of the model.','The design of this website was using buttons, rows and columns to create a box layout. The model is bigger as it is the center piece of the museum. I wanted to keep the layout similar to the home page without copying it.'); ".
					
				"INSERT INTO Model_3D (Id, title, subtitle, decription, webdesign)
					VALUES (7, 'Favrile Vase','Made in Long Island (New York)','This model was made using 3DS max and the texture was taken from an image of the model. Using the camera buttons, animation buttons and Render I can change the position, add animation and remove the lighting and poly of the model.','The design of this website was using buttons, rows and columns to create a box layout. The model is bigger as it is the center piece of the museum. I wanted to keep the layout similar to the home page without copying it.'); ".
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription, webdesign)
					VALUES (8, 'Fennia','Made in Helsinki','This model was made using 3DS max and the texture was taken from an image of the model. Using the camera buttons, animation buttons and Render I can change the position, add animation and remove the lighting and poly of the model.','The design of this website was using buttons, rows and columns to create a box layout. The model is bigger as it is the center piece of the museum. I wanted to keep the layout similar to the home page without copying it.'); ".
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription, webdesign)
					VALUES (9, 'Clutha Vase','Made in Glasgow','This model was made using 3DS max and the texture was taken from an image of the model. Using the camera buttons, animation buttons and Render I can change the position, add animation and remove the lighting and poly of the model.','The design of this website was using buttons, rows and columns to create a box layout. The model is bigger as it is the center piece of the museum. I wanted to keep the layout similar to the home page without copying it.'); ".
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription)
					VALUES (10, 'Gallery','3DS max images','Filled with placeholder text'); ".
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription, webdesign, modeldate, artist, material, dimensions, museum)
					VALUES (11, 'Information China Vase','Product Information','','','Date: 18th Century','Artist/Maker: Unknown','Material and Technique: Porcelain, covered with flambé glaze','Dimensions: Height: 31.2cm, Diameter: 20.3cm','Museum: V&A Museum'); ".
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription, webdesign, modeldate, artist, material, dimensions, museum)
					VALUES (12, 'Information Favrile Vase','Product Information','', '', 'Date: made 1895', 'Artist/Maker: Tiffany, Louis Comfort, born 1848 - died 1933','Material and Technique: Glass with applied and marvered colours, combed','Dimensions: Height: 31.0cm','Museum: V&A Museum'); ".
				
				"INSERT INTO Model_3D (Id, title, subtitle, decription, webdesign, modeldate, artist, material, dimensions, museum)
					VALUES (13, 'Information Fennia Vase','Product Information','','','Date: 18th Century','Artist/Maker: Unknown','Material and Technique: Porcelain, covered with flambé glaze','Dimensions: Height: 31.2cm, Diameter: 20.3cm', 'Museum: V&A Museum'); ".
					
				"INSERT INTO Model_3D (Id, title, subtitle, decription, webdesign, modeldate, artist, material, dimensions, museum)
					VALUES (14, 'Information Clutha Vase','Product Information','', '', 'Date: 1900', 'Artist/Maker: Dresser, Christoper, born 1834 - died 1904 (designer)', 'Blown coloured glass', 'Dimensions: Height: 46.7cm, Diameter: 19.8cm', 'Museum: V&A Museum'); ");
				return "X3D model data inserted successfully inside test1.db";
			}

		catch(PDOException $e)
		{
			print new Exception($e->getMessage());
		}
		///$this->dbhandle = NULL;
	}
	

	public function dbGetData(){
		
		try{
			$sql = 'SELECT * FROM Model_3D';

			$stmt = $this->dbhandle->query($sql);

			$result = null; 

			$i=-0; 

			while ($data = $stmt->fetch()){

				$result[$i]['title'] = $data['title'];
				$result[$i]['subtitle'] = $data['subtitle'];
				$result[$i]['decription'] = $data['decription'];
				$result[$i]['webdesign'] = $data['webdesign'];
				$result[$i]['modeldate']= $data['modeldate'];
				$result[$i]['artist']= $data['artist'];
				$result[$i]['material']= $data['material'];
				$result[$i]['dimensions']= $data['dimensions'];
				$result[$i]['museum']= $data['museum'];

				$i++;
			}
		}

		catch (PDOException $e){
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL; 

		return $result;

	}
	
	public function model3D_info()
	{
		return array
	(
			'model_1' => 'Coke Can 3D Image 1',
			'image3D_1' => 'coca_cola',

			'model_2' => 'Vase 3D Image 2',
			'image3D_2' => 'Vase',

			'model_3' => 'Sprite Bottle 3D Image 1',
			'image3D_3' => 'sprite',

			'model_4' => 'Favrile 3D Image 2',
			'image3D_4' => 'Favrile',

			'model_5' => 'Dr Pepper Cup 3D Image 1',
			'image3D_5' => 'dr_pepper',

			'model_6' => 'Fennia 3D Image 2',
			'image3D_6' => 'Fennia'
	);
	}
}
?>