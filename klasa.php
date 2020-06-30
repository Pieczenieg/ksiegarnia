<?php

	class produkt
	{
		var  $tytul, $author, $cena, $rodzaj, $ilosc;
		 
		 
		
		public function produkt($title, $autor, $price, $type, $ile)
		{
			$this->tytul = $title;
			$this->author = $autor;
			$this->cena = $price;
			$this->rodzaj = $type;
			$this->ilosc = $ile;
			
			
		}
	
		
	
		
	}

?>