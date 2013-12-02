# FuelPHP 1.7 から 1.7.1 へのアップデート方法

## FuelPHP のアップデート

現在、1.7/master ブランチにいます。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git branch
  1.3/master
  1.4/master
  1.5/master
  1.6/master
* 1.7/master
```

GitHub からソースを取得します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git fetch origin
```

git stash して、作業領域の変更を一時保存します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git stash
```

本家の 1.7/master をマージします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git merge origin/1.7/master
```

サブモジュールを更新します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git submodule update
```

一時保存した作業領域での変更を作業領域に戻します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git stash pop
```
