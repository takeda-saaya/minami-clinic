# WP-DartSass 
DartSass対応WordPress構築環境を含むgulpファイル

## 環境
- Gulpが使える環境が前提（4系）
- Nodeはバージョン14以降

## 使い方
- ダウンロードしたフォルダを開く
- gulpfile.jsの"Localで動かすWPのサイトドメイン"を変更
- ターミナルを開き、 npm i とコマンドを入力
- node_modulesとpackage-lock.jsonが生成されるのを確認する
- 「 npx gulp 」とコマンドを入力すると動き出します

## 仕様
- sass,jsの記述はsrcフォルダの中で行う
- 画像はsrcフォルダのimagesの中に格納する（圧縮されます）
- コンパイルされたjs/css/images/は第一階層のassetsとWordPressThemeの中のassetsに吐き出されます

## 備考
- スマホファーストが前提の仕様です。
- rem記述を前提としています。
- ルートフォントをvwで設定していることからPCサイズのレイアウトをタブレットで表示させることが出来ます（remで書いた場合のみ）。
- CSS設計手法のFLOCSSでコーディングしています。

## アップロード
- WordPressThemeをアップロードすればテーマとして反映されます。# WP-DartSass-fromSP_REI
