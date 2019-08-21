# long-sum
A PHP class to sum very long numbers.

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
