<?php


    interface a{
        public function a1();
    }

    interface b{
        public function b1();
    }

    interface x extends a, b{
        public function x1();
    }

    interface p {
        public function p1();
    }

    class someClass  implements x , p{
        public function a1(){
            echo " someClass :: a1() <br>";
        }

        public function b1(){
            echo " someClass :: a1() <br>";
        } 
        
        public function x1(){
            echo " someClass :: a1() <br>";
        }

        public function p1(){
            echo " someClass :: p1() <br>";
        }

    }

    $obj = new someClass();
    $obj->a1();
    $obj->b1();
    $obj->x1();
    $obj->p1();




















    // interface person1{
    //     public function information();
    // }

    // interface person2  extends person1{
    //     public function information1();

    // }
    // class SomePerson implements person2{
    //     public function information(){
    //         echo "Person one information <br>";
    //     }

    //     public function information1(){
    //         echo "Person two information";
    //     }

    // }

    // $sp = new SomePerson();
    // $sp->information();
    // $sp->information1();





?>