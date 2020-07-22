<?php
//класс меню, возвращает html код для меню. 
//Экземпляр класса может быть вызван лишь один раз.
//Реализован патерн Singleton
  class Lib_Menu
  {
	public $MenuItem = array("Main"=>"/index", "Courses"=>"/catalog", "Feedback"=>"/feedback","Log in"=>"/enter"); 
	// public $MenuItem = array("Main"=>"/index", "Courses"=>"/catalog", "Feedback"=>"/feedback","Results"=>"/cart","Log in"=>"/enter");     
   
	protected static $instance; //(экземпляр объекта) Защищаем от создания через new Singleton
	private function __construct() {}	
	public static function getInstance() {//Возвращает единственный экземпляр класса
		if (!is_object(self::$instance)) self::$instance = new self;
		return self::$instance;
    }
	 
	public function  getMenu()
	 {	
	   $print="<nav><ul>";	 
       foreach($this->MenuItem as $name=>$item ){	   
			//  if($name=="Results" && $_SESSION["User"]!=""){
			// 	$print.='<li><a href="/cart" value="">Results</a></li>';
			// } else{
				
			// }
			if ($name=="Log in" && $_SESSION["User"]!=""){
				$print.='<li><a href="/enter">'.$_SESSION["User"].'</a></li>';
				$print.='<li><a href="/enter?out=1">Log out</a></li>';
			} else 
				$print.='<li><a href="'.$item.'" value="">'.$name.'</a></li>';
	   }

	   $print.="</ul></nav>";	
	   return  $print;		 
	 }
	
 }


?>