<?php
/**
 * The interface for setting up currency
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link http://www.phargo.net/
 * @copyright Copyright &copy; 2011 phArgo Software
 * @license GPL & MIT
 */
interface iCurrency {

    /**
     * Returns the number of decimal places for the type of currency
     *
     * @return integer
     */
    public function getNumberOfDecimal();

    /**
     * Returns a string that specifies the output currency
     */
    public function getMainFormat();
}