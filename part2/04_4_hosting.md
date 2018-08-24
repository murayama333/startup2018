# DAY3 - ソフトウェア

クラウドサーバに接続できたので、コマンドをいくつか実行してみましょう。

## 1 よく使うLinuxコマンド

### pwd カレントフォルダの表示

```
pwd
```

カレントフォルダとは、現在、開いているフォルダのことです。Linuxは以下のようなフォルダ構成になっています。最上位のフォルダは / となります。

+ /
  + root/
  + var/
  + etc/
  + home/
  + ...

### mkdir フォルダの作成

```
mkdir sample
```

カレントフォルダにsampleフォルダが作成されます。

### cd カレントフォルダの移動

```
cd /root/sample
```

/root/sample フォルダをオープンします。


### ls カレントフォルダの閲覧

```
ls
```

この時点では /root/sampleフォルダに何もありません。

### echo メッセージの表示

```
echo Hello World
```

画面にHello Worldが表示されます。

次のように入力するとメッセージをファイルに保存できます。

```
echo Hello World > hello.txt
```

> lsコマンドで確認してみましょう。


### cat ファイルの表示

```
cat hello.txt
```

画面にHello Worldが表示されます。


> Linuxにはviエディタというソフトが標準でインストールされています。viエディタはviコマンドで起動できます。（参考） http://net-newbie.com/linux/commands/vi.html


## 2 Webサーバのインストール

続いてWebページを公開するために、Webサーバをインストールします。Webサーバ製品もいくつかありますが、ここでは世界中で最もよく利用されているApacheを利用します。

### クラウドサーバを最新化

クラウド上に作成してすぐのサーバは最新の状態になっていないので、以下のコマンドを使ってサーバの利用するソフトウェアを最新にしておきます。

```
apt update -y
```


### Webサーバ（Apache）のインストール

サーバ上にApacheをインストールします。Apacheは世界で最も使われているWebサーバープロダクトです。

```
apt install apache2
```

サーバのインストールが完了したらブラウザからアクセスしてみましょう。

Chromeなどブラウザ上で以下のURLを入力します。

```
http://52.79.97.23/
```

#### （参考）Apacheの起動と停止

Apacheは以下のコマンドで起動できます。

```
service apache2 start
```

停止するときは以下のようにコマンドを実行します。

```
service apache2 stop
```

### 3 HTMLファイルのアップロード

手元のパソコンから、クラウド上にあるサーバにHTMLファイルをアップロードします。

#### Macユーザの場合

```
scp -i /Users/murayama/Desktop/serverkey.pem /Users/murayama/Desktop/sample.html ubuntu@52.79.97.23
```

#### Windowsユーザの場合

起動中のTeraTermにアップロードしたいファイルをドラッグアンドドロップします。


### 4 Apacheの公開フォルダにHTMLファイルをコピー

Apacheはデフォルトで /var/www/htmlフォルダ上のファイルを公開します。

ここでは以下のようにHTMLファイル（index.html）を /var/www/htmlフォルダにコピーします。

```
cp -rf /root/index.html /var/www/html
```

> その他のCSSファイルや画像ファイルも同様に、/var/www/htmlフォルダにコピーします。

以上でLinuxサーバのセットアップは完了です。

### 5 動作確認

ブラウザを開いて、以下のURLにアクセスしてみましょう。

```
http://52.79.97.23/index.html
```

作成したHTMLファイルを閲覧できればプログラミングは終了です。

> 手元のスマートフォンからHTMLファイルを見ることもできますよ。
