# LongSum
A PHP class to sum very long numbers.

Example:
```php
    $result = LongSum::Sum(
        '111222000111000222000111000000000445',
        '111333000111000333000111000000000555'
    );
    echo $result; // 222555000222000555000222000000001000
```

## Steps to execute tests examples inside a Docker container
Clone project:
```
git clone https://github.com/elmao79/long-sum.git
```
Create Docker container where execute tests:
```
cd long-sum/Docker
docker-compose up -d
```
Install dependencies (PHPUnit):
```
docker exec -it php-long-sum composer install
```
Execute tests:
```
docker exec -it php-long-sum composer test
```
