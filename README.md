# 『テスト駆動開発』 PHP 写経スターターキット

[『テスト駆動開発』](https://shop.ohmsha.co.jp/shopdetail/000000004967/)（の第I部）を PHP で写経する初期状態。

## 動作要件

PHP 8.1 以上を想定

### 初回インストール

```
> composer install
```

### テストを実行する

```
> ./vendor/bin/phpunit
```

### カバレッジリポートを出力する

```
> ./vendor/bin/phpunit --coverage-html ./out
```

### コードを対話的に動かしてみる

```
> ./vendor/bin/psysh ./vendor/autoload.php
```
