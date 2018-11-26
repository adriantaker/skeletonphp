<?php
/**
 * Created by PhpStorm.
 * User: adrcome
 * Date: 7/11/18
 * Time: 12:12
 */

namespace App\Controller;


class HolaArgs
{
    protected $argv=null;
    protected $argc=null;

    public function __construct() {
        $this->argv = func_get_args();
        $this->argc = func_num_args();
        // func_get_arg()
    }

    public function show_args(){
        var_dump($this->argv);
    }

    public function __construct2() {

    }


}
