# Yii2-adldap

This is Yii2 wrapper for [PHP LDAP Library](https://github.com/adLDAP2/adLDAP2). It provides ability to use original Adldap class as Yii2 component.

## Installation

The preferred way to install this extension is through [Composer](https://getcomposer.org/).

Either run

    composer require alexeevdv/yii2-adldap "~1.0.0"

or add

    "alexeevdv/yii2-adldap": "~1.0.0"

to the require section of your composer.json

## Configuration

Add this code in your components section of the application configuration (eg. config/main.php):

```php
'components' => [
    ...
    'ldap' => [
        'class' => \alexeevdv\adldap\Adldap::class,
        'options' => [
            'domain_controllers' => [
                '192.168.0.1',
                '192.168.0.2'
            ],
            'account_suffix' =>  '@test.lan',
            'base_dn' => "DC=test,DC=lan",
        ]
    ],
    ...
]
```

All options and methods are the same as in original class. Take a look at [documentation](https://github.com/Adldap2/Adldap2) if you need more info.

## Examples

Authentication with username and password:

```php
if (Yii::$app->ldap->authenticate("username", "password")) {
    // We are goood
} else {
    // Authentication failed
}
```
