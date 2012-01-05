<?php
/**
 * The strategy of rounding
 * If the fraction of y is 0.5, then result is the odd integer nearest to y.
 *
 * @link http://www.php.net/manual/en/function.round.php
 * @link http://en.wikipedia.org/wiki/Rounding#Round_half_to_odd
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link http://www.phargo.net/
 * @copyright Copyright &copy; 2011 phArgo Software
 * @license GPL & MIT
 */
class oddRounding implements iRounding {
    public function round( $value, $accuracy=0 ) {
        return round( $value, $accuracy, PHP_ROUND_HALF_ODD );
    }
}