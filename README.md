# 楽天ブックスAPIで画像をほげほげする

## setup

```
git clone git@github.com:tadasy/rakuten-image.git
cd rakuten-image
php composer.phar install
```

## env

```zsh
export RAKUTEN_AFFILIATE_ID=<rakuten api affiliate id>
export RAKUTEN_APPLICATION_ID=<rakuten api application id>
```

## start

```zsh
php -S localhost:8080
```

http://localhost:8080


## deploy heroku

```zsh
git push heroku master
```
