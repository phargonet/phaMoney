<?php
/**
 * Round half down (floor)
 *
 * @link http://php.net/manual/en/function.floor.php
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link http://www.phargo.net/
 * @copyright Copyright &copy; 2011 phArgo Software
 * @license GPL & MIT
 */
class floorRounding implements iRounding {
    public function round( $value, $accuracy=0 ) {
        return round( $value, $accuracy, PHP_ROUND_HALF_DOWN );
    }
}