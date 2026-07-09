# Nagakura WordPress テーマ

ナガクラ公式サイト用 WordPress テーマです。HTML デザインを維持したまま WordPress 化しています。

## インストール

1. 本フォルダ（`nagakura`）を ZIP 化する
2. WordPress 管理画面 → 外観 → テーマ → 新規追加 → テーマのアップロード
3. 以下のプラグインをインストール・有効化する
   - MW WP Form
   - Custom Post Type UI
   - Advanced Custom Fields（ACF）

## 初期設定

### 表示設定

- **ホームページ**: 固定ページ（フロントページ用の固定ページを作成し「ホームページ」に指定）
- **投稿ページ**: スラッグ `topics` の固定ページを作成し「投稿ページ」に指定（または投稿アーカイブを利用）

### 固定ページの作成

以下のスラッグで固定ページを作成してください。対応する `page-{slug}.php` が自動適用されます。

| スラッグ | ページ名（例） | テンプレート |
|---------|--------------|-------------|
| about | 会社案内 | page-about.php |
| contact | お問い合わせ | page-contact.php |
| collection | 缶屋さんのオリジナル缶コレクション | page-collection.php |
| fan-goods | 缶屋さんの押し活グッズ | page-fan-goods.php |
| green | 缶屋さんの花と緑のノベルティ | page-green.php |
| company | 会社情報 | page.php（汎用） |
| faq | よくあるご質問 | page-qa.php（スラッグ `qa` でも自動適用） |
| flow | 製作の流れ | page.php（汎用） |

`company`・`faq`・`flow` は元 HTML が存在しないため、管理画面のエディタで本文を入力してください。

### メニュー

外観 → メニュー で「グローバルナビ」にメニューを割り当ててください。

メニュー未設定時は、テーマ内のデフォルトリンクが表示されます。

**メニュー項目の CSS クラス（任意）**

| クラス名 | 用途 |
|---------|------|
| `nav__trigger` | サービスメガメニューのトリガーボタン |
| `nav__cta` | お問い合わせボタン（`btn btn--primary nav__cta`） |
| `nav__cta-dl` | カタログダウンロードボタン |

通常のリンクにはクラス不要（`nav__link` が自動付与されます）。

### MW WP Form（お問い合わせ）

1. MW WP Form でフォームを作成
2. フォームキーを `contact` に設定
3. 固定ページ `contact` にテンプレートが適用されていることを確認

ショートコード: `[mwform_formkey key="contact"]`

## テーマ構成

```
nagakura/
├── style.css              # テーマ情報
├── functions.php          # テーマ機能
├── header.php
├── footer.php
├── front-page.php         # トップページ
├── index.php              # フォールバック
├── page.php               # 汎用固定ページ
├── page-about.php
├── page-contact.php
├── page-collection.php
├── page-fan-goods.php
├── page-green.php
├── single.php             # 投稿・カスタム投稿詳細（共通）
├── archive.php            # トピックス一覧
├── 404.php
├── assets/
│   ├── css/               # スタイルシート
│   ├── js/                # JavaScript
│   └── img/               # 画像
├── download/              # カタログ PDF
└── template-parts/
    ├── mobile-nav.php     # モバイルナビ
    └── cta.php            # CTA セクション
```

## 使用テンプレート

| テンプレート | 用途 |
|-------------|------|
| front-page.php | トップページ |
| page-about.php | 会社案内 |
| page-contact.php | お問い合わせ |
| page-collection.php | 缶コレクション |
| page-fan-goods.php | 押し活グッズ |
| page-green.php | 花と緑のノベルティ |
| page.php | その他固定ページ（company / faq / flow 等） |
| single.php | 投稿・全カスタム投稿タイプの詳細 |
| archive.php | トピックス（投稿）一覧 |
| index.php | フォールバック |
| 404.php | 404 ページ |

## Custom Post Type UI 設定

`functions.php` には `register_post_type()` を記述していません。CPT UI で以下を登録してください。

### ① 新商品

| 項目 | 値 |
|------|-----|
| 投稿タイプスラッグ | `products` |
| 複数形ラベル | 新商品 |
| 単数形ラベル | 新商品 |
| 公開 | はい |
| アーカイブ | いいえ（任意） |
| サポート | タイトル、エディタ、アイキャッチ画像 |

**表示**: トップページ「新商品」セクション（6件・最新順）

### ② 商品ラインナップ

| 項目 | 値 |
|------|-----|
| 投稿タイプスラッグ | `product-collection` |
| 複数形ラベル | 商品ラインナップ |
| 単数形ラベル | 商品ラインナップ |
| 公開 | はい |
| サポート | タイトル、エディタ、アイキャッチ画像 |

**表示**: 固定ページ `collection` の `section-product`（8件）

※ 固定ページスラッグ `collection` と競合しないよう、投稿タイプスラッグは `product-collection` としています。

### ③ 豊富なグッズカテゴリー展開

| 項目 | 値 |
|------|-----|
| 投稿タイプスラッグ | `fan-goods-item` |
| 複数形ラベル | 豊富なグッズカテゴリー展開 |
| 単数形ラベル | 豊富なグッズカテゴリー展開 |
| 公開 | はい |
| サポート | タイトル、エディタ、アイキャッチ画像 |

**表示**: 固定ページ `fan-goods` の `section-cat`（8件）

### ④ グリーン商品

| 項目 | 値 |
|------|-----|
| 投稿タイプスラッグ | `green-item` |
| 複数形ラベル | グリーン商品 |
| 単数形ラベル | グリーン商品 |
| 公開 | はい |
| サポート | タイトル、エディタ、アイキャッチ画像 |

**表示**: 固定ページ `green` の `section-product`（8件）

## デフォルト投稿（トピックス）

WordPress 標準の「投稿」をトピックスとして利用します。

| 項目 | 値 |
|------|-----|
| 用途 | トピックス |
| 表示件数 | トップ 8件 / 一覧は設定件数 |
| 利用フィールド | タイトル、本文、投稿日、アイキャッチ画像、カテゴリー |

カテゴリー名は一覧のカテゴリ表示に使用します。

## ACF

**本テーマでは ACF フィールドは使用していません。**

タイトル・本文・投稿日・アイキャッチ画像は WordPress 標準機能で管理してください。

## CSS 読込

`functions.php` の `nagakura_enqueue_assets()` で読み込みます。

| ファイル | 読込条件 |
|---------|---------|
| assets/css/style.css | 全ページ |
| assets/css/about.css | 固定ページ about |
| assets/css/contact.css | 固定ページ contact |
| assets/css/service.css | 固定ページ collection / fan-goods / green |
| assets/css/single.css | 投稿・カスタム投稿詳細 |
| assets/css/topics.css | 投稿一覧・アーカイブ |
| assets/css/qa.css | 固定ページ qa / faq |
| Google Fonts | 全ページ |
| Swiper CSS | トップページのみ（CDN） |

## JavaScript 読込

| ファイル | 読込条件 |
|---------|---------|
| assets/js/script.js | 全ページ（`defer`） |
| Swiper JS | トップページのみ（CDN） |
| Swiper 初期化 | トップページのみ（インライン） |

## 画像パス

テーマ内画像は `get_template_directory_uri()` 経由の `nagakura_img_uri()` で参照しています。

例: `assets/img/logo.svg`

カタログ PDF: `download/2026catalog.pdf`

## バージョン

1.0.0
