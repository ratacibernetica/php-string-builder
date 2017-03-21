# php-string-builder
String Builder implementation on PHP.

### Quickstart
```php
$str1 = "Hola";
$str2 = " mundo";
$stb = new StringBuilder();
$stb->append($str1);
$stb->append($str2);
echo $stb; //"Hola mundo"
```
