# FuelPHP 1.6 から 1.7 へのアップデート方法

## FuelPHP のアップデート

現在、1.6/master ブランチにいます。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git branch
  1.3/master
  1.4/master
  1.5/master
* 1.6/master
```

GitHub からソースを取得します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git fetch origin
```

git stash して、作業領域の変更を一時保存します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git stash
```

1.7/master をチェックアウトします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git checkout 1.7/master
```

サブモジュールを更新します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git submodule update
```

一時保存した作業領域での変更を作業領域に戻します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git stash pop
```

Composer でインストールされているパッケージをアップデートします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ php composer.phar update
```
