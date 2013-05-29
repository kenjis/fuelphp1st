# FuelPHP 1.5 から 1.6 へのアップデート方法

## FuelPHP のアップデート

現在、1.5/master ブランチにいます。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git branch
  1.3/master
  1.4/master
* 1.5/master
```

GitHub からソースを取得します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git fetch origin
```

1.6/master ブランチをチェックアウトします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git checkout 1.6/master
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

再度、1.6/master をチェックアウトします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git checkout 1.6/master
```

サブモジュールを更新します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git submodule update
```

一時保存した作業領域での変更を作業領域に戻します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git stash pop
warning: Failed to merge submodule fuel/core (commits don't follow merge-base)
Auto-merging fuel/core
CONFLICT (submodule): Merge conflict in fuel/core
Auto-merging fuel/app/config/config.php
CONFLICT (content): Merge conflict in fuel/app/config/config.php
```

コンフリクトしました。

fuel/app/config/config.php をエディタで開いてコンフリクトを修正します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git add fuel/app/config/config.php
fuelphp@lubuntu1204:~/work/fuelphp$ git reset HEAD fuel/core
```

log パッケージは廃止されましたので、削除します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ rm -rf fuel/packages/log
```

Composer が公式に導入されましたので、必要なパッケージをインストールします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ php composer.phar update
```

## サンプルコードのアップデート

### config.php の変更

always_load.packages の log を削除します。

## /usr/bin/oil コマンドのアップデート

GNU/Linux と Mac OS X では、oil コマンドが使えますので、アップデートします。

```
$ curl get.fuelphp.com/oil | sh
```

このアップデートにより、oil create コマンド実行時に composer update が自動的に実行されるようになります。
