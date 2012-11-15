# 『はじめてのフレームワークとしての FuelPHP』追加情報

ここでは、本書の執筆時以降のアップデート情報を提供します。

## FuelPHP のアップデートについて
### FuelPHP 1.4 について
<a name="fuelphp-1.4"></a>

* 2012/11/11 FuelPHP 1.4 がリリースされています。本書の手順どおりに FuelPHP をインストールすると 1.4 がインストールされます。
* 2012/11/11 FuelPHP 1.3 を本書の手順でインストール済みの場合のアップデート方法は [[FuelPHP 1.3 から 1.4 へのアップデート方法]] を参照してください。
* 2012/11/11 FuelPHP 1.4 で第10章のコンタクトフォームのテストが通ることを確認しました。

### FuelPHP 1.3 について
<a name="fuelphp-1.3"></a>

* 2012/09/10 FuelPHP 1.3 がリリースされています。本書の手順どおりに FuelPHP をインストールすると 1.3 がインストールされます。
* 2012/09/10 FuelPHP 1.2 を本書の手順でインストール済みの場合のアップデート方法は [[FuelPHP 1.2 から 1.3 へのアップデート方法]] を参照してください。

## XAMPP のアップデートについて
### XAMPP 1.8.1 について
<a name="xampp-1.8.1"></a>

* 2012/11/06 XAMPP for Linux 1.8.1 (Apache 2.4.3, MySQL 5.5.27, PHP 5.4.7) & FuelPHP 1.3 で第10章のコンタクトフォームのテストが通ることを確認しました。

### XAMPP 1.8.0 について
<a name="xampp-1.8.0"></a>

* 2012/08/19 XAMPP for Linux 1.8.0 (Apache 2.4.2, MySQL 5.5.25a, PHP 5.4.4) & FuelPHP 1.3 で第10章のコンタクトフォームのテストが通ることを確認しました。

## 第2章 開発環境の構築
<a name="chap02"></a>

### 2.2.1 XAMPP for Windows のインストール

(PDF P.14)

#### 手順 1 XAMPP のダウンロード
* 2012/08/06 XAMPP 1.8.0 がリリースされています。1.7.7 は http://sourceforge.net/projects/xampp/files/XAMPP%20Windows/1.7.7/ からダウンロード可能です。

### 2.2.2 Eclipse のインストール

(PDF P.26)

* 2012/10/12 Eclipse 4.2.1 がリリースされています。
* 2012/07/05 Eclipse 3.8 および 4.2 がリリースされています。3.7.2 は http://archive.eclipse.org/eclipse/downloads/ よりダウンロード可能です。3.8 は http://download.eclipse.org/eclipse/downloads/drops/R-3.8-201206081200/ よりダウンロード可能です。

### 2.2.3 PDT のインストール

(PDF P.27)

#### 手順 2 PDT のインストール
* 2012/07/30 Eclipse 3.8 の場合は、「Juno - http://download.eclipse.org/releases/juno 」を選択します。

### 2.3.1 MAMP のインストール

(PDF P.39)

* 2012/07/05 MAMP 2.1.0 がリリースされていますが、PHP 5.3 が含まれていない、PHP 5.4 には Xdebug が含まれていないという問題が報告されています。MAMP 2.0.5 は http://www.mamp.info/downloads/releases/MAMP_MAMP_PRO_2.0.5.zip よりダウンロード可能です。

### 2.3.2 Eclipse のインストール

(PDF P.45)

* 2012/10/12 Eclipse 4.2.1 がリリースされています。
* 2012/07/05 Eclipse 3.8 および 4.2 がリリースされています。3.7.2 は http://archive.eclipse.org/eclipse/downloads/ よりダウンロード可能です。3.8 は http://download.eclipse.org/eclipse/downloads/drops/R-3.8-201206081200/ よりダウンロード可能です。

### 2.4.1 XAMPP for Linux のインストール

(PDF P.51)

#### 手順 1 XAMPP のダウンロード
* 2012/08/06 XAMPP 1.8.0 がリリースされています。1.7.7 は http://sourceforge.net/projects/xampp/files/XAMPP%20Linux/1.7.7/ からダウンロード可能です。

(PDF P.55)

#### 手順 5 の後に「XAMPPのセキュリティ設定」を追加

XAMPP 1.8.0 以降では、XAMPP を起動する前に以下のコマンドを実行し、各サーバにパスワードを設定してください。

```
$ sudo /opt/lampp/lampp security
```

ブラウザで XAMPP のページにアクセスすると、Basic 認証がかかっていますので、ユーザ名「lampp」と設定したパスワードを入力します。phpMyAdmin では、ユーザ名「root」と設定したパスワードでログインします。

### 2.4.2 Eclipse のインストール

(PDF P.60)

* 2012/10/12 Eclipse 4.2.1 がリリースされています。
* 2012/07/05 Eclipse 3.8 および 4.2 がリリースされています。3.7.2 は http://archive.eclipse.org/eclipse/downloads/ よりダウンロード可能です。3.8 は http://download.eclipse.org/eclipse/downloads/drops/R-3.8-201206081200/ よりダウンロード可能です。

### 2.5.1 config.php の変更

(PDF P.65)

* 2012/11/11 FuelPHP 1.4 より、デフォルトの設定は fuel/core/config/config.php に移動され、fuel/app/config/config.php はデフォルトでは空の配列を返すように変更されています。fuel/app/config/config.php には、変更する設定項目のみを追加します。

## 第 4 章 FuelPHP の MVC
<a name="chap04"></a>

### 4.2.1 コントローラの規約

(PDF P.95)

* 2012/07/10 FuelPHP 1.3 では、モデルと同じように namespace Controller; と名前空間を指定できるようになります。http://press.nekoget.com/fuelphp_doc/general/controllers/base.html#/controller_namespacing

### 4.2.2 コントローラと URL の関係

(PDF P.96)

* 2012/10/05 FuelPHP 1.3 からは、Rest コントローラ以外でもアクションメソッド名に HTTP メソッド名の接頭辞を使えるようになりました。http://press.nekoget.com/fuelphp_doc/general/controllers/base.html

### 4.2.4 コントローラの特殊なメソッド

#### after() メソッド

(PDF P.100)

* 2012/10/07 FuelPHP 1.3 では次の変更が必要になりました。https://github.com/kenjis/fuelphp1st/commit/264071ef0234f05ff4cf869ce5d316376c3b8103

## 第6章　FuelPHP の拡張
<a name="chap06"></a>

### 6.4 イベントによる拡張

(PDF P.161)

* 2012/07/05 FuelPHP 1.3 ではシステムで定義されているイベントが大幅に増えます。http://press.nekoget.com/fuelphp_doc/classes/event.html

## 第7章　FuelPHP でのユニットテスト
<a name="chap07"></a>

### 7.3.1 Core クラスのユニットテスト

(PDF P.175)
 
#### Note: Core クラスのテストの失敗
* 2012/06/29 FuelPHP 1.2.1 まで含まれていた不適切なテストは FuelPHP 1.3 で削除されました。https://github.com/fuel/core/issues/971


## 第9章　コンタクトフォームの改良
<a name="chap09"></a>

### 9.2.1 クリックジャック対策

(PDF P.228)

* 2012/09/10 FuelPHP 1.3 からコントローラでの $this->response は廃止されました。そのため、リスト 9.13: Public コントローラ (fuel/app/classes/controller/public.php) はエラーが出て動作しなくなりました。最新のサンプルコードに差し替えてください。

## その他
<a name="others"></a>

* 2012/07/08 FuelPHP 1.2.1 に含まれる Twitter Bootstrap のバージョンは 1.4 ですが、1.2/develop で 2.0.3 にバージョンアップされています。https://github.com/fuel/fuel/commit/00328996d6a4cb1bcd3cbae302516b17af0cd6f3 この変更は FuelPHP 1.2.2 に含まれる予定です。なお、1.3/develop ではすでに以前から 2.0.3 にバージョンアップされています。https://github.com/fuel/fuel/commit/b0136eba1da6e0f5ce17749c6e367a6a03e585ce
