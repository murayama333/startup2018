# DAY3 - ソフトウェア

## 1 クラウドサーバへの接続

クラウドサーバに接続するには次の情報が必要です。

+ 接続ホスト（IPアドレス）
+ ユーザ名
+ パスワード（あるいは秘密鍵）

接続ホスト（IPアドレス）については、前の章で取得済みです。また、今回はサーバ作成時にUbuntuサーバを選択したので、ユーザ名はubuntuでログインできます。

あとはパスワードか秘密鍵が必要になります。今回は秘密鍵を使ってログインします。

秘密鍵ファイルは以下のリンクからダウンロードしてください。

[cloud_demo](https://raw.githubusercontent.com/murayama333/startup2018/master/part2/cloud_demo)

> 右クリックメニューから「リンク先を別名で保存」を選択してください。ファイル名はcloud_demoとして、デスクトップなど任意のフォルダに保存します。

以下、サーバのIPアドレスが52.79.97.23、ユーザ名がubuntu、秘密鍵を使ってログインするという前提で説明します。

> 2018/08/25（土）のみなさん、ユーザ名はrootです。

---

### Macユーザ

「ターミナル」アプリケーションを起動して、以下の2つのコマンドを入力します。

鍵ファイルの権限を変更します。

> フォルダ名に注意してください。

```
chmod 400 /Users/murayama/Desktop/cloud_demo
```

クラウドサーバに接続します。

> フォルダ名に注意してください。

```
ssh ubuntu@52.79.97.23 -i /Users/murayama/Desktop/cloud_demo
```

---

### Windowsユーザ

WindowsにはMacの「ターミナル」のような、リモートサーバに接続する標準的なアプリケーションがありません。ここではTeraTermというアプリケーションをインストールしておきましょう。

以下のページにアクセスして、teraterm-4.89.zipをダウンロードします。

https://osdn.jp/projects/ttssh2/releases/64118

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/itc_seminar/TT00.PNG" >


> ダウンロードしたzipファイルは任意のフォルダに解凍しておいてください。


TeraTermの起動手順は以下のとおりです。

1.HostにクラウドサーバのIPアドレス（52.79.97.23など）を入力して、OKボタンをクリックします。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/itc_seminar/TT01.PNG" >

2.初回接続時は、次のような警告が表示されますが、continueボタンをクリックします。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/itc_seminar/TT02.PNG" >

3.User nameにrootを入力して、Use RSA/DSA〜を選択し、Private key file:ボタンをクリックします。

> 画像とUsername、ファイル名が違うので注意してください。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/itc_seminar/TT04.PNG" >

4.表示されたダイアログで、先にダウンロードしておいた秘密鍵ファイル（cloud_dem）を選択します。ファイルの種類をall(\*\.\*)にする点に注意してください。

> 画像とファイル名が違うので注意してください。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/itc_seminar/TT03.PNG" >

5.秘密鍵を選択したらOKボタンをクリックします。

> 画像とUsername、ファイル名が違うので注意してください。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/itc_seminar/TT06.PNG" >

6.次のように表示されればクラウドサーバへの接続は完了です。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/itc_seminar/TT05.PNG" >


> 難しそうな黒い画面が表示されました。この画面の中での操作は、すべてクラウドサーバ上で実行されます。
