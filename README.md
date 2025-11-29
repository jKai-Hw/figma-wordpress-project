# Figma → WordPress テンプレートプロジェクト

> ⚠️ **このプロジェクトについて**
> 
> これは**実際の案件プロジェクトではありません**。
> 
> Figma → WordPress のコーディング案件を効率的に進めるための**ルール・ワークフロー・テンプレートを作成するためのプロジェクト**です。
> 
> 新しい案件では、このプロジェクトをコピーして使用します。

---

## 🚀 新規案件を始める方はこちら

👉 **[新規案件スタートガイド](docs/QUICK_START.md)**

新しい案件が来た時に、何から始めればいいかをステップバイステップで解説しています。

---

## 🎯 このプロジェクトの目的

1. **ワークフローの確立** - Figma MCPを活用した効率的な開発フローを設計
2. **Cursor Rulesの作成** - AIとの協業ルールを整備
3. **テンプレート作成** - 案件ごとに使い回せる基本構造を準備
4. **ベストプラクティスの蓄積** - 経験を元にルールを改善していく

---

## 🔧 技術スタック

| 項目 | 技術 |
|------|------|
| CMS | WordPress（クラシックテーマ） |
| CSS | SCSS（npm でコンパイル） |
| JavaScript | jQuery（WordPress同梱版） |
| 開発環境 | Docker |
| デザイン連携 | Figma MCP |
| エディタ | Cursor（AI支援） |

---

## 📁 ディレクトリ構造

```
figma-wordpress-project/
├── .cursor/
│   └── rules/              # Cursor Rules（AI協業ルール）
├── docs/
│   ├── PROJECT_PLAN.md     # プロジェクト計画・メモ
│   └── QUICK_START.md      # 新規案件スタートガイド ⭐
├── wp-theme/               # WordPressテーマ
│   ├── assets/
│   │   ├── scss/           # SCSSファイル
│   │   ├── css/            # コンパイル後のCSS
│   │   ├── js/             # JavaScript
│   │   └── images/         # 画像
│   ├── inc/                # PHP機能ファイル
│   ├── template-parts/     # 再利用可能なパーツ
│   ├── header.php          # ヘッダー
│   ├── footer.php          # フッター
│   ├── front-page.php      # トップページ
│   ├── functions.php       # テーマ機能
│   └── style.css           # テーマ情報
├── docker-compose.yml
├── package.json
└── README.md
```

---

## 📝 ドキュメント一覧

| ファイル | 内容 |
|----------|------|
| [docs/QUICK_START.md](docs/QUICK_START.md) | **新規案件スタートガイド**（まずこれを読む） |
| [docs/PROJECT_PLAN.md](docs/PROJECT_PLAN.md) | プロジェクト計画、決定事項 |
| `.cursor/rules/*.mdc` | Cursor用のAI協業ルール |

---

## 🛠️ セットアップ

### 必要なもの

- Docker Desktop
- Node.js (v16以上)
- Cursor IDE
- Figma Personal Access Token（MCP用）

### MCP設定

Cursorの設定 (`~/.cursor/mcp.json`) に以下を追加：

```json
{
  "mcpServers": {
    "figma": {
      "command": "npx",
      "args": ["-y", "figma-developer-mcp", "--stdio"],
      "env": {
        "FIGMA_API_KEY": "YOUR_FIGMA_API_KEY"
      }
    }
  }
}
```

### 開発環境の起動

```bash
# 依存関係インストール
npm install

# Docker起動
docker-compose up -d

# SCSS監視モード
npm run watch:css

# WordPressにアクセス
open http://localhost:8080
```

---

## 🔄 ワークフロー概要

```
デザイナー: Figmaでデザイン作成
           ↓
自分: Figma URLを受け取る → Node IDをメモ
           ↓
Phase 1: スタイルガイドから変数生成（MCP）
           ↓
Phase 2: セクションごとに実装（MCP）
           ↓
Phase 3: 動的化（ACF連携）
           ↓
Phase 4: 確認・修正・納品
```

詳細は [新規案件スタートガイド](docs/QUICK_START.md) を参照。

---

## 📋 よく使うコマンド

```bash
# 開発環境
docker-compose up -d      # 起動
docker-compose down       # 停止

# SCSS
npm run watch:css         # 監視モード（開発中）
npm run build:css         # ビルド（納品前）

# Git
git add .
git commit -m "✨ feat: 機能追加"
git push origin main
```

---

## 📄 ライセンス

GPL v2 or later
