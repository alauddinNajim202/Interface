<?php   

    interface Info_interface {
        public function Information();
    }

    abstract class  Info_abstract {
        abstract public function Information();
    }


    class SomeClass implements Info_interface{

        public function Information(){
            echo "Interfaec Information";
        }
    }

    class AnotherClass extends Info_abstract {

        public function Information(){
            echo "<br> Abstract Information";
        }

    }

    $s_class = new SomeClass();
    $s_class->Information();


    $a_class = new AnotherClass();
    $a_class->Information();





?>