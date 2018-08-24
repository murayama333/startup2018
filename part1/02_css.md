# DAY3 - ソフトウェア

## PART2 CSS

> Cascading Style Sheets - HTML、XMLの表示レイアウトなどの修飾を指定するのための仕様。 - Wikipedia

### sample.html

動作確認用にHTMLを作成します。

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CSS Sample</title>
    <link rel="stylesheet" href="style01.css">
  </head>
  <body>
    <div>
      <h1 id="title">Programming</h1>
      <ul>
        <li class="server">PHP</li>
        <li class="client">Java</li>
        <li class="server">JavaScript</li>
      </ul>
    </div>
  </body>
</html>
```

### style01.css

タグ名を指定してスタイルを指定します。

```css
body {
  background-color: #eeeeee;
  color: white;
}

div {
  background-color: #6FC041;
}
```

+ スタイルは {} の中に プロパティ: 値; で定義します。
+ background-colorは背景色を指定しています。
+ colorはテキストの色を指定しています。

### style02.css

id属性を指定してスタイルを指定します。id属性は一つのHTMLの中で重複のない値を指定します。

```css
#title {
  font-size: 64px;
}
```
+ id属性を指定する場合は先頭に#をつけます。
+ font-sizeプロパティはフォントサイズを指定します。

### style03.css

class属性を指定してスタイルを指定します。class属性は関係のある要素をグループ化します。

```css
.server {
  color: blue;
}

.client {
  color: red;
}
```

+ class属性を指定する場合は先頭に.をつけます。

他にも様々なCSSプロパティがあります。HTMLクイックリファレンス などを参考にしてみると良いでしょう。

http://www.htmq.com/style/
