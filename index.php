<!-- 
    create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza (proprietà)
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle
 relative proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump
 -->

 <?php

 class Movie
 {
     public $title;
     public $author;
     public $actors;
     public $release_date;
     public $combo;
    
     public function getTitleAndAuthor(){
       return $this->title.' di '.$this->author;
     }

     public function __construct($_title,$_author,$_actors,$_release_date)
     {
         $this->title = $_title;
         $this->author = $_author;
         $this->actors = $_actors;
         $this->release_date = $_release_date;
        
         
     }


 }

 $batman = new Movie('Batman begins','Christofer Nolan','Christian Bale',22/04/2009);
 
 $batman2 = new Movie('Il cavaliere oscuro','Christofer Nolan','Christian Bale',22/04/2012);
  
 


