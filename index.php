
<?php

    class ShowUrl {
        private $url;

        public function __construct($url)
        {
            $this->url = $url;
        }

        public function setURL($url){

        $this->url = $url;

        }
        public function getURL(){

        return $this->url;

        }
    }

    $result = new ShowUrl("<a href=''> http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']} <a>");
    echo $result->getURL();


    class Exchange {

        private $exchage;

        public function __construct($exchage)
        {
            $this->exchage = $exchage;
        }

        // public function setExchange($exchage){

        //     $this->exchange = $exchage;
    
        // }

        public function getExchange(){
            $money_khmer = 4000;
            $result =0;
            $result = $this->exchage/$money_khmer;
            return $result;
        }
    }

    $result_exchange = new Exchange(20000000);
    echo "<br><br><br><br><br>";
    echo $result_exchange -> getExchange() . "$";






    class Calculate {
        
        protected $original_money;
        
        public function __construct($original_money)
        {
            $this->original_money = $original_money;
        }

    }


    class Futtervalue extends Calculate {

        public function getFuterValue(){
           
            $result = $this->original_money*10/100;

            return $result;
        }

    }


    $futterValue = new Futtervalue(10000);

    echo "<br><br><br><br><br>";

    echo $futterValue -> getFuterValue()."$";
?>