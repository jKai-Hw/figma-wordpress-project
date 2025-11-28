# Figma WordPress Project

> ⚠️ **このプロジェクトについて**
> 
> これは**実際の案件プロジェクトではありません**。
> 
> Figma → WordPress のコーディング案件を効率的に進めるための**ルール・ワークフロー・テンプレートを作成するためのプロジェクト**です。
> 
> 実際の案件では、このプロジェクトで作成したルールやテンプレートを活用します。

---

## 🎯 このプロジェクトの目的

1. **ワークフローの確立** - Figma MCPを活用した効率的な開発フローを設計
2. **Cursor Rulesの作成** - AIとの協業ルールを整備
3. **テンプレート作成** - 案件ごとに使い回せる基本構造を準備
4. **ベストプラクティスの蓄積** - 経験を元にルールを改善していく

## 📋 現在のステータス

**計画段階（ルール作成中）**

詳細は [`docs/PROJECT_PLAN.md`](docs/PROJECT_PLAN.md) を参照してください。

---

## 🔧 技術スタック

- **WordPress** - ブロックテーマ（FSE）
- **SCSS** - CSSプリプロセッサ
- **jQuery** - JavaScript
- **Docker** - ローカル開発環境
- **Figma MCP** - デザインデータ連携
- **Cursor** - AI支援開発

## 📁 ディレクトリ構造

```
figma-wordpress-project/
├── .cursor/
│   └── rules/              # Cursor Rules（AI協業ルール）
├── docs/
│   └── PROJECT_PLAN.md     # プロジェクト計画・メモ
├── wp-theme/               # WordPressテーマ（テンプレート）
│   ├── parts/              # テンプレートパーツ
│   ├── patterns/           # ブロックパターン
│   ├── templates/          # ページテンプレート
│   ├── assets/             # SCSS/JS/画像
│   ├── functions.php
│   ├── style.css
│   └── theme.json
├── docker-compose.yml
└── README.md
```

## 📝 ドキュメント

| ファイル | 内容 |
|----------|------|
| [`docs/PROJECT_PLAN.md`](docs/PROJECT_PLAN.md) | プロジェクト計画、決定事項、TODOリスト |
| `.cursor/rules/*.mdc` | Cursor用のAI協業ルール |

## 🚀 セットアップ（開発時）

### 必要なもの

- Docker Desktop
- Node.js (16以上)
- Cursor IDE
- Figma Personal Access Token

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

### WordPress環境の起動

```bash
# Docker Composeで起動
docker-compose up -d

# WordPressにアクセス
open http://localhost:8080
```

## 🔄 ワークフロー概要

```
デザイナー: Figmaでデザイン作成
           ↓
自分: Figma URLを受け取る
           ↓
Phase 1: 全体構造を把握（MCP）
           ↓
Phase 2: ベース構築（SCSS変数、theme.json）
           ↓
Phase 3: セクションごとに実装
           ↓
Phase 4: テンプレート組み立て・確認
```

詳細は [`docs/PROJECT_PLAN.md`](docs/PROJECT_PLAN.md) を参照。

## 📄 ライセンス

GPL v2 or later
