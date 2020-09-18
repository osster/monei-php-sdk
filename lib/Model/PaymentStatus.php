<?php
/**
 * PaymentStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MONEI API v1
 *
 * The MONEI API is organized around [REST](https://en.wikipedia.org/wiki/Representational_State_Transfer). Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PaymentStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the payment.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentStatus
{
    /**
     * Possible values of this enum
     */
    const SUCCEEDED = 'SUCCEEDED';
    const PENDING = 'PENDING';
    const FAILED = 'FAILED';
    const CANCELED = 'CANCELED';
    const REFUNDED = 'REFUNDED';
    const PARTIALLY_REFUNDED = 'PARTIALLY_REFUNDED';
    const AUTHORIZED = 'AUTHORIZED';
    const EXPIRED = 'EXPIRED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCEEDED,
            self::PENDING,
            self::FAILED,
            self::CANCELED,
            self::REFUNDED,
            self::PARTIALLY_REFUNDED,
            self::AUTHORIZED,
            self::EXPIRED,
        ];
    }
}

