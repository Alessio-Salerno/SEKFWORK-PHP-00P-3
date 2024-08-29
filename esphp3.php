<?php

class Vertebrato{

   public function __construct(){
      
       $this->printVertebrato(); 
     
   }

    //  METODO PROTECTED
     protected function printVertebrato(){
        echo "Sono un animale Vertebrato \n";
     }

}



class WarmBlood extends Vertebrato{

  public function __construct(){

    parent::__construct();
    $this->printWarmblood();

  }

  //METODO PROTECTED
 protected function printWarmblood(){
    echo "Sono un animale sangue caldo \n";
 }

}

class ColdBlood extends Vertebrato{
    public function __construct(){
        parent::__construct();
        $this->printColdBlood();
    }

  public function printColdBlood(){
    echo "Sono un animale a sangue freddo \n";
  }

}


class Mamal extends WarmBlood{
    public function __construct(){
        parent:: __construct();
        $this->printMamal();
    }

    public function printMamal(){
        echo "Sono un mammifero \n";
    }

}



class Bird extends WarmBlood{
    public function __construct(){
        parent::__construct();
        $this->printBird();
    }

 public function printBird(){
    echo "Sono un volatile \n";
 }

}



class Fish extends ColdBlood{
     public function __construct(){
        parent::__construct();
        $this->printFish();
     }


protected function printFish(){
    echo "Io sono un pesce \n";
}

}

class Rettile extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->printRettile();
    }

protected function printRettile(){
    echo "Io sono un rettile \n";
}



} 




class SalvoPinto extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->SalvoPinto();
    }

protected function SalvoPinto(){
    echo "Io mi chiamo Salvo Pinto \n";
}

}




$Pinto = new SalvoPinto();



?>