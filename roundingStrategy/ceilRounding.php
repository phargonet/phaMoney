<?php
/**
 * The strategy of rounding up (ceil)
 *
 * @link http://php.net/manual/en/function.ceil.php
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link http://www.phargo.net/
 * @copyright Copyright &copy; 2011 phArgo Software
 * @license GPL & MIT
 */
class ceilRounding implements iRounding {
    public function round( $value, $accuracy=0 ) {
        return round( $value, $accuracy, PHP_ROUND_HALF_UP );
    }
}