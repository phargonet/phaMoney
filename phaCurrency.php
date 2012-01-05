<?php
/**
 * Currency operation
 *
 * @author Vadim Kruchkov <long@phargo.net>
 * @link http://www.phargo.net/
 * @copyright Copyright &copy; 2011 phArgo Software
 * @license GPL & MIT
 */
class phaCurrency {

    /**
     * @var string Define constant for US dollars
     */
    const USD_CURRENCY = 'usd';

    /**
     * @var string Current ID currency
     */
    protected $id;

    /**
     * @var iCurrency Current currency object
     */
    protected $oDetail;

    /**
     * Constructor of object
     *
     * @param string $sId Currency ID
     */
    public function __construct( $sId ) {
        $this->id = $sId;
        $class = strtolower($sId) . 'Currency';
        $this->oDetail = new $class;
    }

    /**
     * @return string Current ID currency
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get cross-rate for current currency in comparison with the specified
     * It's not work now correctly - for all currency return 1.
     *
     * @param string $currencyId Specified ID of the currency against which you want to display the cross-rate
     * @return float
     */
    public function getCrossRateTo( $currencyId ) {
        return 1;
    }

    /**
     * Returns the number of decimal places for currency
     * @return integer
     */
    public function getNumberOfDecimal() {
        return $this->oDetail->getNumberOfDecimal();
    }

    /**
     * @return string format for current exchange
     */
    public function getMainFormat() {
        return $this->oDetail->getMainFormat();
    }
}