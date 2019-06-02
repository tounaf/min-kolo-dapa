<?php 
	class Database
	{
		public static function getconnexion()
		{
			$db = new PDO("mysql:host=localhost;dbname=min_kolo_dapa","root","");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		}
	}
	
 ?>