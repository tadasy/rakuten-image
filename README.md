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
# herokuコマンドを入れていなければインストール
brew install heroku
# herokuにログイン
heroku login
# herokuリポジトリを追加
heroku git:remote -a rakuten-images
# デプロイ
git push heroku master
```
https://rakuten-images.herokuapp.com/list.php
