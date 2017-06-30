<?php
class Paper{

    private $register;

    public function register($name){

        $this->register[] = $name;

    }

    public function tigger(){
        if (!empty($this->register)) {
            foreach($this->register as $item){
                $item->update();
            }
        }
    }
}

interface Notic{

    public function update();

}

class A implements Notic{

    public function update()
    {
        // TODO: Implement update() method.
    }
}

class B implements Notic{

    public function update()
    {
        // TODO: Implement update() method.
    }
}

$paper = new Paper();
$paper->register(new A());
$paper->register(new B());
$paper->tigger();