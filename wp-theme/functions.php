<?php
/**
 * Figma WordPress Theme functions and definitions
 * 
 * 【テンプレート】実際の案件では必要に応じてカスタマイズしてください
 *
 * @package Figma_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * テーマのセットアップ
 */
function figma_theme_setup() {
    // 翻訳サポート
    load_theme_textdomain( 'figma-theme', get_template_directory() . '/languages' );

    // HTML5サポート
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // タイトルタグ
    add_theme_support( 'title-tag' );

    // アイキャッチ画像
    add_theme_support( 'post-thumbnails' );

    // カスタムロゴ
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // ブロックエディタースタイル
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/style.css' );

    // レスポンシブ埋め込み
    add_theme_support( 'responsive-embeds' );

    // ブロックスタイル
    add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'figma_theme_setup' );

/**
 * スタイルとスクリプトの読み込み
 */
function figma_theme_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // Google Fonts - Noto Sans JP
    // 実際の案件ではFigmaのデザインに合わせてフォントを変更
    wp_enqueue_style(
        'figma-theme-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // メインスタイル（テーマ情報用）
    wp_enqueue_style(
        'figma-theme-style',
        get_stylesheet_uri(),
        array( 'figma-theme-fonts' ),
        $theme_version
    );

    // SCSSからコンパイルしたカスタムスタイル
    if ( file_exists( get_template_directory() . '/assets/css/style.css' ) ) {
        wp_enqueue_style(
            'figma-theme-custom',
            get_template_directory_uri() . '/assets/css/style.css',
            array( 'figma-theme-style' ),
            $theme_version
        );
    }

    // jQuery（WordPress同梱版を使用）
    wp_enqueue_script( 'jquery' );

    // カスタムスクリプト（jQuery依存）
    if ( file_exists( get_template_directory() . '/assets/js/main.js' ) ) {
        wp_enqueue_script(
            'figma-theme-main',
            get_template_directory_uri() . '/assets/js/main.js',
            array( 'jquery' ),
            $theme_version,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'figma_theme_scripts' );

/**
 * ブロックパターンカテゴリの登録
 * 実際の案件では必要なカテゴリを追加・変更
 */
function figma_theme_register_pattern_categories() {
    register_block_pattern_category(
        'figma-theme-hero',
        array( 'label' => __( 'Hero Sections', 'figma-theme' ) )
    );

    register_block_pattern_category(
        'figma-theme-features',
        array( 'label' => __( 'Features', 'figma-theme' ) )
    );

    register_block_pattern_category(
        'figma-theme-cta',
        array( 'label' => __( 'Call to Action', 'figma-theme' ) )
    );

    register_block_pattern_category(
        'figma-theme-testimonials',
        array( 'label' => __( 'Testimonials', 'figma-theme' ) )
    );

    register_block_pattern_category(
        'figma-theme-pricing',
        array( 'label' => __( 'Pricing', 'figma-theme' ) )
    );

    register_block_pattern_category(
        'figma-theme-contact',
        array( 'label' => __( 'Contact', 'figma-theme' ) )
    );
}
add_action( 'init', 'figma_theme_register_pattern_categories' );
