<?php

/**
 * Created by PhpStorm.
 * User: denisolvr
 */
class Array_Manipulation
{
    var $main_array;

    /**
     * @return mixed
     */
    public function getMainArray()
    {
        return $this->main_array;
    }

    /**
     * @param mixed $main_array
     */
    public function setMainArray($main_array)
    {
        $this->main_array = $main_array;
    }

    public function __construct($array) {
        return $this->setMainArray($array);
    }

    function groupArray(array $keys) {
        // create the output array
        $data_output = $this->main_array;
        // assist var to index
        $flag = 0;

        //walk each element in array
        foreach ($data_output as $array_each){
            /*
             * First at all transform the $keys in an array key/value after catch the array between
             * the difference of $array each and $key with this difference We'll have that apply one more
             * time the diff to extract the correctly intersection of the array
             */
            $data_output[$flag] = array_diff_key($array_each,array_diff_key($array_each,array_flip($keys)));

            //variable assist for index creation
            $flag++;
        }

        return $data_output;
    }
}