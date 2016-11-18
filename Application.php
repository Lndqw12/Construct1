<?php
namespace liw\core;

absctract class Application
{
	piblic function __construct()
	{
		echo 'Сосдазлся новый экземпляр "vender/liw/core/"<br>';
	}
	absctract public function run();
	
	final public function getFramework()
	{
		return 'LIW';
	}
}