<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Person's name associated with this address. Character length
 * and limitations: 32 single-byte alphanumeric characters
 */
class AddressType extends PPXmlMessage
{

    /**
     * Person's name associated with this address. Character length
     * and limitations: 32 single-byte alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Name;

    /**
     * First street address. Character length and limitations: 300
     * single-byte alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Street1;


    /**
     * Name of city. Character length and limitations: 120
     * single-byte alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CityName;


    /**
     * ISO 3166 standard country code Character limit: Two
     * single-byte characters.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Country;


    /**
     * Telephone number associated with this address
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Phone;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PostalCode;

}
