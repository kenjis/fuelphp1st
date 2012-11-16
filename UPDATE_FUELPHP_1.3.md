# FuelPHP 1.2 から 1.3 へのアップデート方法

## FuelPHP のアップデート

現在、1.2/master ブランチにいます。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git branch 
* 1.2/master
```

GitHub からソースを取得します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git fetch origin 
remote: Counting objects: 50, done.
remote: Compressing objects: 100% (23/23), done.
remote: Total 33 (delta 21), reused 22 (delta 10)
Unpacking objects: 100% (33/33), done.
From git://github.com/fuel/fuel
   822ebc0..ab3fd48  1.2/master -> origin/1.2/master
   aea316d..fdd924c  1.3/develop -> origin/1.3/develop
 * [new branch]      1.3/master -> origin/1.3/master
 * [new branch]      1.4/develop -> origin/1.4/develop
Fetching submodule docs
remote: Counting objects: 146, done.
remote: Compressing objects: 100% (51/51), done.
remote: Total 114 (delta 79), reused 95 (delta 60)
Receiving objects: 100% (114/114), 13.91 KiB, done.
Resolving deltas: 100% (79/79), completed with 26 local objects.
From git://github.com/fuel/docs
   d09fda9..95104d4  1.3/develop -> origin/1.3/develop
 * [new branch]      1.3/master -> origin/1.3/master
 * [new branch]      1.4/develop -> origin/1.4/develop
Fetching submodule fuel/core
…略…
```

1.3/master ブランチをチェックアウトします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git checkout 1.3/master 
error: Your local changes to the following files would be overwritten by checkout:
	fuel/app/config/config.php
	fuel/app/config/db.php
Please, commit your changes or stash them before you can switch branches.
Aborting
```

ローカルでの変更が上書きされるため失敗しました。

git stash して、ローカルの変更を一時保存します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git stash
```

再度、1.3/master をチェックアウトします。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git checkout 1.3/master 
M	docs
M	fuel/core
M	fuel/packages/auth
M	fuel/packages/email
M	fuel/packages/oil
M	fuel/packages/orm
M	fuel/packages/parser
Branch 1.3/master set up to track remote branch 1.3/master from origin.
Switched to a new branch '1.3/master'
…略…
```

stash した変更を作業領域に戻します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git stash pop
```

サブモジュールを更新します。

```
fuelphp@lubuntu1204:~/work/fuelphp$ git submodule update
Submodule path 'docs': checked out 'dfe62191224b794010e15d1ccf464f2597e3102c'
Submodule path 'fuel/core': checked out '61ef4c098485035f4d625d87238e4d408dfa59e5'
Submodule path 'fuel/packages/auth': checked out 'd5c78ff7e3b1698334747587505d79baf59a3158'
Submodule path 'fuel/packages/email': checked out '6a38100229aa02c905d143c200a0dac5184a174e'
Submodule path 'fuel/packages/oil': checked out 'e0947076c4058104f92d8465ccb82d2ac93f6b72'
Submodule path 'fuel/packages/orm': checked out '42a37ce5d639bc6485b907764280dca3285a2bf9'
Submodule path 'fuel/packages/parser': checked out 'f85eafe3ed198bf51feb7c3c1c7116aa3a77ea24'
```

## サンプルコードのアップデート

以下の変更を適用してください。

* https://github.com/kenjis/fuelphp1st/commit/39ff20f06001c33834f3d297fb34aa9f35b79e71
