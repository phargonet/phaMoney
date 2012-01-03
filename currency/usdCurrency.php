<?php
/**
 * The implementation of the dollars currency.
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link http://www.phargo.net/
 * @copyright Copyright &copy; 2011 phArgo Software
 * @license GPL & MIT
 */
class usdCurrency implements iCurrency {

    /**
     * Specifies the number of minimum units of one currency unit
     * Cents in the dollar
     *
     * @var integer
     */
    private $NumberOfDecimal = 2;

    /**
     * Returns the minimum number of digits of currency units
     *
     * @return integer
     */
    public function getNumberOfDecimal() {
        return $this->NumberOfDecimal;
    }

    /**
     * Returns a string that specifies the output format currency
     *
     * @return string
     */
    public function getMainFormat() {
        return '$%m.%f';
    }
}