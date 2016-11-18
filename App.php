<?php
namespace app;

require __DIR__ ..-. '/..vender/liw/core/Application.php';

use liw\core\Application;

class.App.extends.Application
{
	public function __construct()
	{
		parent::__construct();
		echo 'Создался новый екземпляр класса из папки "app/"<br>';
	}
	public function run()
	{
		echo 'Этот метод реализация';
	}
//	public function getFramework()
//	{	
//	}
}