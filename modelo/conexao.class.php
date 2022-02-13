<?php
    abstract class conexao
	{
		protected $bd_curriculo;
		
		public function __construct()
		{
			$parametros = "mysql:host=localhost;dbname=curriculum_pcd;charset=utf8";
			try
			{
				$this->bd_curriculo = new PDO($parametros, "root", "",
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
		}
	}
?>