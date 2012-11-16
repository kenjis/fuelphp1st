# FuelPHP 1.3 から 1.4 へのアップデート方法

## FuelPHP のアップデート

現在、1.3/master ブランチにいます。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git branch
* 1.3/master
```

GitHub からソースを取得します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git fetch origin
```

1.4/master ブランチをチェックアウトします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git checkout 1.4/master
error: Your local changes to the following files would be overwritten by checkout:
	fuel/app/config/config.php
	fuel/app/config/db.php
	fuel/app/config/development/db.php
	fuel/app/config/production/db.php
	fuel/app/views/welcome/404.php
	fuel/app/views/welcome/hello.php
	fuel/app/views/welcome/index.php
Please, commit your changes or stash them before you can switch branches.
error: The following untracked working tree files would be overwritten by checkout:
	fuel/app/config/test/db.php
Please move or remove them before you can switch branches.
Aborting
```

作業領域での変更が上書きされてしまうため失敗しました。

git stash などして、作業領域の変更を一時保存します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ mv fuel/app/config/test/db.php fuel/app/config/test/db.php.bk
fuelphp@lubuntu1204:~/work/fuelphp$ git stash
```

再度、1.4/master をチェックアウトします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git checkout 1.4/master
```

一時保存した作業領域での変更を作業領域に戻します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ mv fuel/app/config/test/db.php.bk fuel/app/config/test/db.php
fuelphp@lubuntu1204:~/work/fuelphp$ git stash pop
Auto-merging fuel/app/config/development/db.php
Auto-merging fuel/app/config/db.php
CONFLICT (content): Merge conflict in fuel/app/config/db.php
Auto-merging fuel/app/config/config.php
CONFLICT (content): Merge conflict in fuel/app/config/config.php
```

コンフリクトしました。これは、1.4 からデフォルト設定が fuel/core/config フォルダ以下のファイルで定義され fuel/app/config/db.php と fuel/app/config/config.php は設定が空に変更されたためです。

config/db.php と config/config.php をエディタで開いて、コンフリクトを修正します。元の状態に戻せば OK です。

本書では変更点をコミットしていませんので reset しておきます。コミットする場合は add して commit してください。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git reset HEAD fuel/app/config/config.php
fuelphp@lubuntu1204:~/work/fuelphp$ git reset HEAD fuel/app/config/db.php
fuelphp@lubuntu1204:~/work/fuelphp$ git reset HEAD fuel/app/config/development/db.php
fuelphp@lubuntu1204:~/work/fuelphp$ git reset HEAD fuel/app/config/routes.php
```

サブモジュールを更新します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git submodule update
```
