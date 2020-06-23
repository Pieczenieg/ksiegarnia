<?php

	class produkt
	{
		var  $tytul, $author, $cena, $ilosc, $rodzaj, $ID;
		 
		 
		
		public function produkt($title, $autor, $price, $count, $type, $id)
		{
			$this->tytul = $title;
			$this->author = $autor;
			$this->cena = $price;
			$this->ilosc = $count;
			$this->rodzaj = $type;
			$this->ID = $id;
		}
	
		
	
		
	}

?>