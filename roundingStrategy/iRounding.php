<?php
/**
 * An interface that defines the strategy of rounding applied to the money
 *
 * Why require different strategies can be found, for example, there - http://www.interface.ru/home.asp?artId=19535
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link http://www.phargo.net/
 * @copyright Copyright &copy; 2011 phArgo Software
 * @license GPL & MIT
 */
interface iRounding {
    /**
     * The method of rounding
     *
     * @param mixed $value The initial value, which requires rounding
     * @param integer $accuracy The number of decimal places
     * @return float
     */
    public function round( $value, $accuracy=0 );
}