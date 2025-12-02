# 📋 プロジェクト計画

> **このファイルについて**
>
> このファイルは**プロジェクトの計画・設計**を記録するためのファイルです。
> 案件ごとにカスタマイズして使用してください。

---

## 📌 プロジェクト概要

### 対象サイト想定

| 項目 | 内容 |
|------|------|
| サイト規模 | 企業サイト 5〜10ページ |
| ページ構成 | TOP, About, Service一覧/詳細, News一覧/詳細, Contact |
| 拡張機能 | カスタム投稿タイプ（CPT）、ACF（Advanced Custom Fields） |
| 動的要素 | スライダー、絞り込み検索、お問い合わせフォーム |

### 役割分担

| 役割 | 担当 | 備考 |
|------|------|------|
| デザイン | デザイナーさん | Figmaで作成 |
| コーディング | 自分 | WordPress実装 |
| AI支援 | Cursor | SCSS/jQuery実装、コンパイル |

### 技術スタック

| 項目 | 技術 |
|------|------|
| CMS | WordPress（**クラシックテーマ**） |
| CSS | **SCSS**（npm で自動コンパイル） |
| JavaScript | **jQuery**（WordPress同梱版） |
| カスタムフィールド | **ACF**（Advanced Custom Fields） |
| スライダー | **Swiper.js** |
| 開発環境 | Docker |
| バージョン管理 | Git / GitHub |

---

## 🔄 ワークフロー

```
⚠️ 重要: Figmaのページ全体・ファイル全体を一気に渡すのは絶対NG
   → トークン爆発、精度低下、コスト無駄の原因になる

Phase 0: デザイン受け取り
├── デザイナーさんからFigmaのURLを受け取る
├── デザインの意図・注意点があれば確認
├── 各セクションのNode IDを控えておく
└── 不明点があればデザイナーさんに質問

Phase 1: スタイルガイド読み込み（Node ID指定・1回だけ）
├── Figma MCP でスタイルガイドのNode IDだけを取得
├── デザイントークン抽出（カラー、フォント、余白）
├── _variables.scss を生成
└── ※ページ全体は絶対に渡さない

Phase 2: 構造把握 & ベース構築
├── ページ構成のみ確認（詳細データは取得しない）
├── セクションリストをメモに記録
├── npm install → npm run watch:css 起動
└── 共通コンポーネントのSCSS作成

Phase 3: セクション実装（Node ID指定・1つずつ）
├── セクションのNode IDを指定して取得
├── PHPテンプレート作成
├── SCSS でスタイリング（変数を使用）
├── jQuery でインタラクション（必要なら）
├── 画像は手動書き出し or プレースホルダー
├── レスポンシブ確認
└── → 次のセクションへ

Phase 4: 動的化 & テンプレート組み立て
├── ACFフィールド設計・実装
├── 全体通しで確認
├── デザイナーさんに確認依頼
└── フィードバック反映
```

---

## 📁 ディレクトリ構造

```
wp-theme/
├── assets/
│   ├── scss/
│   │   ├── _variables.scss      # Figmaから抽出した変数
│   │   ├── _mixins.scss         # メディアクエリ等
│   │   ├── _reset.scss          # リセットCSS
│   │   ├── _base.scss           # ベーススタイル
│   │   ├── _typography.scss     # タイポグラフィ
│   │   ├── components/          # 共通コンポーネント
│   │   │   ├── _button.scss
│   │   │   ├── _card.scss
│   │   │   └── _navigation.scss
│   │   ├── sections/            # セクション別スタイル
│   │   │   ├── _header.scss
│   │   │   ├── _footer.scss
│   │   │   └── _hero.scss
│   │   └── style.scss           # メインファイル
│   ├── css/
│   │   └── style.css            # npm run build:css で生成
│   ├── js/
│   │   ├── main.js
│   │   ├── slider.js
│   │   └── filter.js
│   └── images/
├── inc/
│   ├── custom-post-types.php    # CPT登録
│   ├── custom-taxonomies.php    # タクソノミー登録
│   └── acf-fields.php           # ACFフィールド（コード管理する場合）
├── template-parts/              # 再利用パーツ
│   ├── card-post.php
│   ├── card-service.php
│   └── section-cta.php
├── header.php                   # ヘッダー
├── footer.php                   # フッター
├── front-page.php               # トップページ
├── page.php                     # 汎用固定ページ
├── page-about.php               # 会社概要
├── page-contact.php             # お問い合わせ
├── archive-service.php          # サービス一覧
├── single-service.php           # サービス詳細
├── archive.php                  # 汎用アーカイブ（ニュース等）
├── single.php                   # 汎用投稿詳細
├── 404.php                      # 404エラー
├── index.php                    # フォールバック
├── functions.php
├── style.css                    # テーマ情報
└── screenshot.png               # テーマサムネイル
```

---

## 🎨 Figmaデータの渡し方

### ⛔ 絶対NG

- ファイル全体を一気に渡す
- ページ全体を一気に渡す

### ✅ 2段階アプローチ（推奨）

**【フェーズ1】脳を作る = スタイルガイドだけを渡す（最初に1回）**
- スタイルガイド/Typography/ColorsのNode IDを指定
- `_variables.scss` を生成

**【フェーズ2】手を作る = セクションごとに渡す（都度）**
- 各セクションのNode IDを指定
- 変数を使ってコーディング

### Node IDの取得方法

```
FigmaのURL: https://www.figma.com/design/xxxxx/FileName?node-id=123-456
                                                        ↑ これがNode ID
```

---

## ✅ 技術決定事項

| 項目 | 決定内容 |
|------|----------|
| テーマタイプ | **クラシックテーマ**（.php） |
| CSS | SCSS を使用 |
| CSS設計 | BEM記法（.block__element--modifier） |
| SCSSコンパイル | **npm（watch/build）で自動実行** |
| JavaScript | jQuery OK（WordPress同梱版を使用） |
| 開発環境 | Docker（ローカル） |
| Figmaの渡し方 | 2段階アプローチ（スタイルガイド→セクション） |
| スライダー | Swiper.js |
| フォーム | Contact Form 7 または MW WP Form |

---

## 📋 Cursor Rules 一覧

`.cursor/rules/` に配置されているルールファイル：

| ファイル名 | 説明 |
|-----------|------|
| `general.mdc` | プロジェクト全般のルール |
| `wordpress-theme.mdc` | WordPressテーマ開発ルール |
| `figma-integration.mdc` | Figma MCP連携ルール |
| `coding-standards.mdc` | コーディング規約 |
| `responsive-design.mdc` | レスポンシブ実装ルール |
| `wordpress-advanced.mdc` | CPT、ACF、動的要素 |
| `quality-checklist.mdc` | 品質チェックリスト |
| `git-workflow.mdc` | Git運用ルール |

---

## 🛠️ 開発コマンド

```bash
# 依存関係インストール
npm install

# SCSS監視モード（開発中はこれを起動）
npm run watch:css

# SCSSコンパイル（本番用・圧縮）
npm run build:css

# Docker起動
docker-compose up -d

# Docker停止
docker-compose down
```

---

## 📚 参考リンク

- [Figma MCPサーバーガイド](https://developers.figma.com/docs/figma-mcp-server)
- [WordPress テーマ開発](https://developer.wordpress.org/themes/)
- [ACF ドキュメント](https://www.advancedcustomfields.com/resources/)
- [Swiper.js ドキュメント](https://swiperjs.com/get-started)

---

## 🔍 改善ポイントを洗い出すためのチェック観点

このテンプレート自体を改善するときは、少なくとも以下の観点で確認する。

- **ドキュメント整合性**
  - README / QUICK_START / PROJECT_PLAN と実際のディレクトリ構成・ファイル有無が一致しているか
  - 「やり方」が重複・分散しすぎていないか（同じ説明が複数箇所にないか）
- **開発者体験（DX）**
  - 初回セットアップ〜テーマ有効化まで、詰まりポイントがないか
  - コマンド（npm scripts / create-delivery.sh など）が直感的か・不足していないか
  - エラーになりがちなポイントにガイド・コメントがあるか
- **テーマ構成・拡張性**
  - PROJECT_PLAN に書かれた理想の構成と、`wp-theme` の実体がどこまで揃っているか
  - 追加でよく作るページ・テンプレートがテンプレート内に含まれているか
  - CPT / タクソノミー / ACF のサンプルが、現実の案件パターンと合っているか
- **Figma連携・AI連携**
  - Figma MCP 用のルールが、実際の作業フローとズレていないか
  - Cursor に投げるプロンプト例が、今の自分の使い方にフィットしているか
  - 「やってほしくないこと（アンチパターン）」が十分に明示されているか
- **フロントエンド品質**
  - SCSS構成・命名・変数設計が、最近の案件のベストプラクティスと合っているか
  - アクセシビリティ・レスポンシブ・パフォーマンスの観点が不足していないか
- **運用・納品フロー**
  - 納品スクリプトや「何を含めるか／含めないか」のルールが現場運用に合っているか
  - Git運用ルール（ブランチ戦略・コミットメッセージ）が実際の運用と噛み合っているか

このチェック観点に沿って、テンプレートの現状を定期的に見直し、改善候補を洗い出す。
