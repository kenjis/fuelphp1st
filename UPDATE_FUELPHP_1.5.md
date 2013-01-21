# FuelPHP 1.4 から 1.5 へのアップデート方法

## FuelPHP のアップデート

現在、1.4/master ブランチにいます。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git branch
  1.3/master
* 1.4/master
```

GitHub からソースを取得します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git fetch origin
```

1.5/master ブランチをチェックアウトします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git checkout 1.5/master
error: Your local changes to the following files would be overwritten by checkout:
	fuel/app/config/config.php
Please, commit your changes or stash them before you can switch branches.
Aborting
```

作業領域での変更が上書きされてしまうため失敗しました。

git stash して、作業領域の変更を一時保存します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git stash
```

再度、1.5/master をチェックアウトします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git checkout 1.5/master
```

一時保存した作業領域での変更を作業領域に戻します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git stash pop
```

log パッケージが追加されましたので、サブモジュールを初期化します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git submodule init fuel/packages/log
Submodule 'fuel/packages/log' (git://github.com/fuel/log.git) registered for path 'fuel/packages/log'
```

サブモジュールを更新します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git submodule update
```

## サンプルコードのアップデート

### config.php の変更

always_load.packages に log を追加します。

なお、作成される log ファイルのパーミッションが変っているため、GNU/Linux では、コマンドラインからの実行でログが作成された後にブラウザからアクセスすると (その逆も) ログファイルに書き込み権限がないためエラーになります。
