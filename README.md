# Lithium Persian Validation

Lithium Persian Validation provides validation for Persian alphabet, number and etc.

## Requirement

* Laravel 5.*
* PHP 5.5 >=

## License

Laravel Persian Validation is open-sourced software licensed under the [BSD license](http://opensource.org/licenses/bsd-license.php)

## Install

Clone it from github and put it inside your `libraries` folder:

``` bash
$ composer require Anetwork/Validation
```

## Config

Add the following line in your `config/bootstrap/libraries.php`:
``` php
Libraries::add('li3_validation');
```

## Usage

You can access to validation rules by passing the rules key according blew following table:

| Rules | Descriptions |
| --- | --- |
| persianAlpha | Persian alphabet |
| persianNum | Persian numbers |
| persianAlphaNum | Persian alphabet and numbers |
| alphaSpace | Accept Persian, English and ... alphabet, space character|
| iranMobile | Iran mobile numbers |
| iranPhone | Iran phone numbers |
| cardNumber | Payment card numbers |
| shebaNum | Iran Sheba numbers |
| melliCode | Iran melli code |
| iranPostalCode | Iran postal code |
| persianAddress | Accept Persian, English and ... alphabet, Persian and English numbers and some special characters|
| unSignedNum | Checked variable is unsigned numbers |
| noPersian | Doesn't accept Persian alphabet and numbers |

## Example usage:

### Persian Alpha
Accept Persian language alphabet according to standard Persian, this is the way you can use this validation rule:

```
Validator::rule('persianAlpha', 'متن فارسی');
//output: true
```

### Persian numbers
Validate Persian standard numbers (۰۱۲۳۴۵۶۷۸۹):

```
Validator::rule('persianNum', '۰۱۲۳۴۵۶۷۸۹');
//output: true
```

### Persian Alpha Num
Validate Persian alpha num:

```
Validator::rule('persianAlphaNum', 'فارسی۱۲۳۴۵۶۷۸۹');
//output: true
```

### Iran mobile phone
Validate Iran mobile phones (irancel, rightel, hamrah-e-aval, ...):

```
Validator::rule('iranMobile', '09356820085');
//output: true
```

### Payment card number
Validate Iran payment card numbers:

```
Validator::rule('shebaNum', '6274129005473742');
//output: true
```

### Sheba number
Validate Iran bank sheba numbers:

```
Validator::rule('shebaNum', 'IR062960000000100324200001');
//output: true
```

### Iran national code
Validate Iran national code (melli-code):

```
Validator::rule('shebaNum', '3240175800');
//output: true
```
### Iran postal code
Validate Iran postal code:

```
Validator::rule('shebaNum', '167197-35744');
//output: true


Validator::rule('shebaNum', '16719735744');
//output: true
```

### Persian Address
Validate persian alphabet, number and some special characters:

```
Validator::rule('persianAddress', 'ایران، تهران - پردیس');
//output: true


Validator::rule('persianAddress', 'Iran / Tehran / pardis / 16');
//output: true


Validator::rule('persianAddress', 'Iran, Tehran & pardis');
//output: false
```

### UnSigned number
validate number to be unsigned:

```
Validator::rule('unSignedNum', '110');
//output: true


Validator::rule('unSignedNum', '-110');
//output: false


Validator::rule('unSignedNum', '8.5');
//output: false
```

### No persian
validate string that is not contain persian alphabet and number:

```
Validator::rule('noPersian', 'Ali Hesari');
//output: true


Validator::rule('noPersian', 'Ali علی');
//output: false


Validator::rule('noPersian', '110');
//output: true


Validator::rule('noPersian', '110علی');
//output: false


Validator::rule('noPersian', '۱۱۰');
//output: false
```
