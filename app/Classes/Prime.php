<?php


class prime

{

    protected $inputNumber;
    protected $result;
    protected $i;
    protected $z;


    public function __construct($post=null)

    {
        $this->inputnumber =$_POST['input_number'];
    }
    public function index()
    {
        if($this->inputnumber == 1)
        {
            return $this->z =0;
        }
        for ($this->i =2; $this->i <= $this->inputNumbwe/2; $this->i++)
        {
            if($this->inputnumber % $this-> i ==0)
            {
                return$this->z= 0;

            }

        }
        return$this-> z =1;
    }

}
