<?php


    interface MathInterface{

        const MSG = "Math Interface";
        const PI = 3.1416;
        public function calculate();
    }

    // class SomeClass implements MathInterface{
    //     public function calculate(){
            
    //     }
    //     const MSG = "Inside class";

    // }

    // echo SomeClass :: MSG . "<br>";
    echo MathInterface :: PI . "<br>";


    echo "<br>";

    interface LoggerInterface{
        public function log($message);
    }

    class FileLogger implements LoggerInterface{
        public function log($message){
            echo "File Logger :".$message;
        }

    }

    class DatabaseLogger implements LoggerInterface{
        public function log($message){
            echo "Database logger :".$message;
        }

    }

    $file = new FileLogger();
    $file->log("object created .. <br>");

    $database = new DatabaseLogger();
    $database->log("object created .. <br>");



?>