<?php
/**
 * Created by PhpStorm.
 * User: singularis
 * Date: 15-8-17
 * Time: 上午10:22
 */
//$realPart //实数部分
//$imaginaryPart //虚数部分


interface  iTemplate {
    public function  getComplex ( $realPart , $imaginrayPart)  ;
    public function compareComplex($partOne , $partTwo) ;

}

class  Complex implements  iTemplate {
    private $realPart = array() ;
    private $imaginrayPart = array() ;
    private $array = array() ;
    public function  getComplex ( $realPart , $imaginrayPart)  {
        $this->array = [
            'realPart' => $realPart ,
            'imaginrayPart' => $imaginrayPart ,
        ] ;
    }

    /**
     * @param $partOne
     * @param $partTwo
     */
    public function compareComplex($partOne , $partTwo) {
        $partOne = $this->array[0] ;
        $partTwo = $this->array[1] ;
        if($partOne['imaginrayPart'] == 0 && $partTwo['imaginrayPart'] == 0) {
            $info = '虚部为0，可以比较' ;
            if($partOne['realPart'] >= $partTwo['realPart']) {
                $cOut = $partOne['realPart'] ;
            }else {
                $cOut = $partTwo['realPart'] ;
            }

        } else {
            $partOne['length'] = $partOne['realPart']  * $partOne['realPart']  + $partOne['imaginrayPart']  * $partOne['imaginrayPart'] ;
            $partTwo['length'] = $partTwo['realPart']  *  $partTwo['realPart']  + $partTwo['imaginrayPart']  * $partTwo['imaginrayPart'] ;
            $info = '虚部不为0，不能直接比较，计较双方的模大小' ;
            if($partOne['length'] >= $partTwo)  {
                $cOut = $partOne['realPart'].'+('.$partOne['imaginrayPart'].'i)' ;
            } else {
                $cOut = $partTwo['realPart'].'+('.$partTwo['imaginrayPart'].'i)' ;
            }
        }
        echo $info ;
        echo '较大数是'.$cOut ;

    }

}

