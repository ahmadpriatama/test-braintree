Test Braintree server response object on PHP 

# Usage
- copy `.env-sample` to `.env`
- update `.env` with your credential
- then run
```
php -S localhost:8080
```
- open [Test Page](http://localhost:8080)


# Script
- `index.php` main form has GET parameter `amount` which is optional
- `token.php` form token generated here and loaded by `index.php`
- `sale.php` create actual transaction to braintree