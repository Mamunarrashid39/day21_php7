<?php


namespace App\classes;


class Series
{
    protected $staringNumber;
    protected $endingNumber;
    protected $i;
    protected $result;
    protected $type;
    protected $temp;
    protected $tempStart;
    protected $tempEnd;
    public function __construct($data=null)
    {
        $this->staringNumber = $data['starting_number'];
        $this->endingNumber  = $data['ending_number'];
    }

    public function index(){
        for($this->i = $this->staringNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if( $this->result.= $this->i."");

            {
                if($this->staringNumber> $this->endingNumber)
                {
                    $this->tempstart = $this->staringNumber;
                    $this->tempEnd =$this->endingNumber;
                }
                else
                    {

                        $this->tempstart = $this->staringNumber;
                        $this->tempEnd =$this->endingNumber;
                }
                for($this->i =$this->tempstart;$this->i >= $this->tempEnd;$this-> i--)
                    $this->result .= $this->. ' ';
            }
        }
    elseif ($this->type=='asc')

        {

        }

//        for($this->i = $this->staringNumber; $this->i >= $this->endingNumber; $this->i--)
//        {
//            $this->result.= $this->i." ";
//        }
        return $this->result;
    }
}