<?php
/**
 * li3_validation: Li3 Persian validations.
 *
 * @copyright     Copyright 2017, Ali Hesari (https://github.com/alihesari/li3_validation)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\util\Validator;
use li3_validation\extensions\data\source\ValidationRules;

/**
 * validate persian alphabet and space
 */
Validator::add('persianAlpha', function($value) {
    return ValidationRules::Alpha(null, $value);
});

/**
 * validate persian number
 */
Validator::add('persianNum', function($value) {
    return ValidationRules::Num(null, $value);
});

/**
 * validate persian alphabet, number and space
 */
Validator::add('persianAlphaNum', function($value) {
    return ValidationRules::AlphaNum(null, $value);
});

/**
 * validate Iranian mobile number
 */
Validator::add('iranMobile', function($value) {
    return ValidationRules::IranMobile(null, $value);
});

/**
 * validate Iranian phone number
 */
Validator::add('iranPhone', function($value) {
    return ValidationRules::IranPhone(null, $value);
});

/**
 * validate Iranian phone number
 */
Validator::add('cardNumber', function($value) {
    return ValidationRules::CardNumber(null, $value);
});

/**
 * validate Sheba number
 */
Validator::add('shebaNum', function($value) {
    return ValidationRules::Sheba(null, $value);
});

/**
 * validate MeliCode number
 */
Validator::add('melliCode', function($value) {
    return ValidationRules::MelliCode(null, $value);
});

/**
 * validate iranian postal code
 */
Validator::add('iranPostalCode', function($value) {
    return ValidationRules::IranPostalCode(null, $value);
});

/**
 * validate persian alphabet, number and some special characters
 */
Validator::add('persianAddress', function($value) {
    return ValidationRules::Address(null, $value);
});

/**
 * validate alphabet and spaces
 */
Validator::add('alphaSpace', function($value) {
    return ValidationRules::AlphaSpace(null, $value);
});

/**
 * validate number to be unsigned
 */
Validator::add('unSignedNum', function($value) {
    return ValidationRules::UnSignedNum(null, $value);
});

/**
 * validate string that is not contain persian alphabet and number
 */
Validator::add('noPersian', function($value) {
    return ValidationRules::IsNotPersian(null, $value);
});

