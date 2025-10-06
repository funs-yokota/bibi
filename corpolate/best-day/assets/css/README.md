# ITCSS (Inverted Triangle CSS) 設計ガイド

このプロジェクトでは、[ZOZOのテックブログ](https://techblog.zozo.com/entry/itcss-to-zozotown)と[TAKLOGのレスポンシブコーディング記事](https://www.tak-dcxi.com/article/my-blogs-responsive-coding#%E4%BD%99%E7%99%BD%E3%82%84%E8%A6%81%E7%B4%A0%E3%81%AE%E5%B9%85%E3%81%AE%E6%8C%87%E5%AE%9A%E3%81%AFclamp%E3%81%95%E3%82%8C%E3%81%9Ffont-size%E3%82%92%E5%9F%BA%E6%BA%96%E3%81%A8%E3%81%97%E3%81%9Fem%E3%81%A7%E7%B5%84%E3%82%80)を参考に、ITCSSの設計思想に基づいたCSS構成を採用しています。

## ITCSSとは

ITCSSは、CSS Wizardy の Harry Roberts氏が提唱したCSSの詳細度を管理する設計思想です。
「Inverted Triangle CSS (逆三角形のCSS)」の略で、設定の詳細度順に階層化して記述します。

## レスポンシブデザインのアプローチ

### 動的clamp() + emベースのシステム

このプロジェクトでは、[TAKLOG記事](https://www.tak-dcxi.com/article/my-blogs-responsive-coding#%E4%BD%99%E7%99%BD%E3%82%84%E8%A6%81%E7%B4%A0%E3%81%AE%E5%B9%85%E3%81%AE%E6%8C%87%E5%AE%9A%E3%81%AFclamp%E3%81%95%E3%82%8C%E3%81%9Ffont-size%E3%82%92%E5%9F%BA%E6%BA%96%E3%81%A8%E3%81%97%E3%81%9Fem%E3%81%A7%E7%B5%84%E3%82%80)を参考にした動的clamp()計算システムを採用しています：

#### 1. **動的clamp()計算システム**
```css
*,
::before,
::after {
  --clamp-root-font-size: 16;
  --clamp-slope: calc((var(--clamp-max) - var(--clamp-min)) / (var(--clamp-viewport-max) - var(--clamp-viewport-min)));
  --clamp-y-axis-intersection: calc(var(--clamp-min) - (var(--clamp-slope) * var(--clamp-viewport-min)));
  --clamp-preffered-value: calc(
    var(--clamp-y-axis-intersection) * (1rem / var(--clamp-root-font-size)) + (var(--clamp-slope) * 100vi)
  );
  --clamp: clamp(
    calc(var(--clamp-min) * (1rem / var(--clamp-root-font-size))),
    var(--clamp-preffered-value),
    calc(var(--clamp-max) * (1rem / var(--clamp-root-font-size)))
  );
  font-size: var(--clamp);
}
```

#### 2. **使用方法**
```css
/* 見出し要素を20px〜24pxで調整したい場合 */
.title {
  --clamp-min: 20;
  --clamp-max: 24;
}

/* ボタンを小さくしたい場合 */
.c-button--small {
  --clamp-min: var(--clamp-small-min);
  --clamp-max: var(--clamp-small-max);
}
```

#### 3. **emベースの余白システム**
```css
:root {
  --spacing-xs: 0.25em;   /* 0.25rem → 0.25em */
  --spacing-sm: 0.5em;    /* 0.5rem → 0.5em */
  --spacing-md: 1em;      /* 1rem → 1em */
  --spacing-lg: 1.5em;    /* 1.5rem → 1.5em */
  --spacing-xl: 2em;      /* 2rem → 2em */
  --spacing-xxl: 3em;     /* 3rem → 3em */
  --spacing-xxxl: 4em;    /* 4rem → 4em */
}
```

#### 4. **block-sizeによる高さ指定**
```css
:root {
  --block-size-hero: 50em;      /* em-based hero height */
  --block-size-section: 30em;   /* em-based section height */
  --block-size-card: 20em;      /* em-based card height */
}
```

### 設計原則

1. **コンテナ幅**: pxで固定（変化させたくない箇所）
2. **余白・サイズ**: emで指定（clamp()されたfont-sizeを基準）
3. **高さ**: block-sizeで指定（レスポンシブな高さ）
4. **フォントサイズ**: 動的clamp()で自動計算

### 利点

- **一貫性**: 画面幅を狭めても余白に一貫性を保持
- **シンプル**: コンテナクエリによる余白調整が不要
- **ガタつき防止**: デザイン乱れが起きにくい
- **レスポンシブ**: 自然なスケーリング
- **動的計算**: 最小値・最大値を指定するだけで自動的にclamp()が計算される
- **保守性**: マジックナンバーを避け、変数で管理

### TAKLOG記事の参考ポイント

- **メディアクエリよりもコンテナクエリを優先**: コンポーネントのサイズを基準としたレスポンシブ設計
- **font-sizeはclamp()関数で指定**: 画面サイズに応じて自動調整
- **余白や要素の幅の指定はemで組む**: clamp()されたfont-sizeを基準とした一貫したスケーリング
- **375px未満はviewportを固定**: 小さな画面での表示を安定化

## レイヤー構成

### 1. Settings (設定)
- **役割**: CSSプリプロセッサなどで利用する変数や設定
- **詳細度**: 最も低い
- **ファイル**:
  - `settings/variables.css` - CSS変数（色、フォント、スペーシングなど）
  - `settings/keyframes.css` - アニメーションのキーフレーム
  - `settings/theme.css` - テーマ固有の設定

### 2. Tools (ツール)
- **役割**: ミックスイン、関数、ユーティリティ
- **詳細度**: 低い
- **ファイル**:
  - `tools/mixins.css` - メディアクエリやユーティリティクラス

### 3. Generic (汎用)
- **役割**: リセット、ノーマライズ
- **詳細度**: 低い
- **ファイル**:
  - `generic/generic.css` - ブラウザのデフォルトスタイルリセット

### 4. Base (基本)
- **役割**: 要素のデフォルトスタイル
- **詳細度**: 低い
- **ファイル**:
  - `base/global.css` - グローバルな基本設定（HTML、body、フォーカス、スクロールバーなど）
  - `base/elements.css` - HTML要素のデフォルトスタイル（h1-h6、p、a、ul、ol、img、form、tableなど）

### 5. Objects (オブジェクト)
- **役割**: OOCSSの概念に基づいた定義、レイアウト、グリッド
- **詳細度**: 中程度
- **ファイル**:
  - `objects/objects.css` - レイアウト、グリッドシステム

### 6. Components (コンポーネント)
- **役割**: 再利用可能なUIコンポーネント
- **詳細度**: 高い
- **ファイル**:
  - `components/buttons.css` - ボタンコンポーネント
  - `components/cards.css` - カードコンポーネント

### 7. Pages (ページ)
- **役割**: ページ固有のスタイル
- **詳細度**: 高い
- **ファイル**:
  - `pages/top.css` - トップページ固有のスタイル

### 8. Utilities (ユーティリティ)
- **役割**: ヘルパークラス
- **詳細度**: 最も高い
- **ファイル**:
  - `utilities/spacing.css` - マージン、パディング
  - `utilities/display.css` - ディスプレイ、位置、テキスト

## Baseレイヤーの分離について

### global.css vs elements.css

#### **global.css** - グローバルな基本設定
- HTMLとbodyの基本設定
- フォントファミリー、カラー、背景色などの基本スタイル
- 全体的なレイアウトの基本設定
- グローバルなフォーカススタイル
- セレクションスタイル
- スクロールバースタイル

#### **elements.css** - HTML要素のデフォルトスタイル
- 個別のHTML要素（h1-h6、p、a、ul、ol、img、form、tableなど）のスタイル
- 要素固有のデフォルト設定
- 動的clamp()を使用した見出しスタイル
- ブロッククォート、コード要素などのスタイル

### 分離の利点

1. **明確な責務分離**: グローバル設定と要素固有のスタイルが明確に分離される
2. **保守性**: グローバル設定の変更が要素固有のスタイルに影響しない
3. **拡張性**: 新しい要素のスタイルを追加する際の構成が明確
4. **可読性**: ファイルの目的が明確で、必要な修正箇所が特定しやすい

## 命名規則

### プレフィックス
- **Settings**: プレフィックスなし（CSS変数）
- **Tools**: プレフィックスなし
- **Generic**: プレフィックスなし
- **Base**: プレフィックスなし（HTML要素）
- **Objects**: `.o-` プレフィックス
- **Components**: `.c-` プレフィックス
- **Pages**: `.p-` プレフィックス
- **Utilities**: `.u-` プレフィックス

### 例
```css
/* Objects */
.o-container { }
.o-grid { }
.o-flex { }

/* Components */
.c-button { }
.c-card { }
.c-card__title { }

/* Pages */
.p-hero { }
.p-featured { }
.p-news { }

/* Utilities */
.u-margin-md { }
.u-display-flex { }
.u-text-center { }
```

## ページ固有のスタイルについて

ページ固有のスタイルは **Pagesレイヤー** に配置します：

### 配置場所
- `assets/css/pages/top.css` - トップページ
- `assets/css/pages/about.css` - 会社概要ページ
- `assets/css/pages/contact.css` - お問い合わせページ

### 命名規則
- `.p-` プレフィックスを使用
- ページ固有のセクションやレイアウトを定義

### 例
```css
/* pages/top.css */
.p-hero { /* ヒーローセクション */ }
.p-featured { /* フィーチャーセクション */ }
.p-news { /* ニュースセクション */ }
```

## 利点

1. **作業分担しやすい**: 複数のメンバーが同時に作業をしても競合しづらい
2. **保守性が高い**: CSS全体を一貫したルールで記述できる
3. **導入コストが低い**: 既存のCSSとの互換性を保ちながら段階的に導入可能
4. **詳細度の管理**: 上位レイヤーが下位レイヤーを上書きしない構造
5. **ページ固有の管理**: ページごとのスタイルが明確に分離される
6. **レスポンシブ対応**: clamp()とemによる自然なスケーリング
7. **動的計算**: 最小値・最大値を指定するだけで自動的にclamp()が計算される
8. **明確な責務分離**: Baseレイヤーの分離により保守性が向上

## 使用方法

メインのCSSファイル `top.css` で各レイヤーをインポートします：

```css
@layer settings, tools, generic, base, objects, components, pages, utilities;

@import './settings/variables.css' layer(settings);
@import './tools/mixins.css' layer(tools);
@import './generic/generic.css' layer(generic);
@import './base/global.css' layer(base);
@import './base/elements.css' layer(base);
@import './objects/objects.css' layer(objects);
@import './components/buttons.css' layer(components);
@import './pages/top.css' layer(pages);
@import './utilities/spacing.css' layer(utilities);
```

## 参考資料

- [ITCSSを採用して共同開発しやすいCSS設計をZOZOTOWNに導入した話](https://techblog.zozo.com/entry/itcss-to-zozotown)
- [当ブログのレスポンシブコーディングについて](https://www.tak-dcxi.com/article/my-blogs-responsive-coding#%E4%BD%99%E7%99%BD%E3%82%84%E8%A6%81%E7%B4%A0%E3%81%AE%E5%B9%85%E3%81%AE%E6%8C%87%E5%AE%9A%E3%81%AFclamp%E3%81%95%E3%82%8C%E3%81%9Ffont-size%E3%82%92%E5%9F%BA%E6%BA%96%E3%81%A8%E3%81%97%E3%81%9Fem%E3%81%A7%E7%B5%84%E3%82%80)
- [ITCSS: Scalable and Maintainable CSS Architecture](https://www.xfive.co/blog/itcss-scalable-maintainable-css-architecture/) 