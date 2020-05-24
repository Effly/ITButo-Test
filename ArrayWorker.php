<?

class ArrayWorker{
    protected $array = [];

    function __construct($n){
        
        $this->fill($n,$array);
        $this->reindex($array);
        
        
    }
    protected function  fill($n,$array){ 
        for($i=0;$i<=$n;$i++){

            $this->$array[$i]= rand(1,100);
            //array_push($this->arr,rand(1,100));
            
        }
    }

    protected function reindex($array){


        $max = array_keys($this->$array, max($this->$array))[0];
        $min = array_keys($this->$array, min($this->$array))[0];

        // echo'<pre>';
        // var_dump($this->$array);

        $buf=$this->$array[$max];
        $this->$array[$max]=$this->$array[$min];
        $this->$array[$min]=$buf;
        
        // echo'<pre>';
        // var_dump($this->$array);
    }

    public function dump(){
       echo (max($this->$array)+min($this->$array)); 
    }
    
}

$arr= new ArrayWorker(5);



?>