<?php
/**
 * The implementation of the dollars currency.
 *
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