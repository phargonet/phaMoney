<?php
/**
 * The interface for setting up currency
 *
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