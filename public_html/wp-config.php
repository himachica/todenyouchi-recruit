<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'nimura_test2025');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'nimura_test2025');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'spiceseek_2025');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql80.nimura.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JGZ%`cd}m&Ig^{@OR&4Z[IB2IATI#0H:5ZK.i$f;f|XA@i5g.*Nqr]VKM|*FV#J[');
define('SECURE_AUTH_KEY',  '4yl<cIw-FDC)iM4_PM,z5uK~;bT3pMh{oA`q{%9*O5._/YX47Nl_Kjh8dkgjt|Bb');
define('LOGGED_IN_KEY',    'sh#H0RaV=k &3u[k9xqGx;W]7gOQHnR%$jA7>gyrlhq^p&Wqdn! Lw_Qm,}[5bL1');
define('NONCE_KEY',        '^uY6$%dX&j,pUj3urYBY_En8/w|{eUYP?zf777h|3jw/V3h+d]V;)g 1U%]..fWu');
define('AUTH_SALT',        '^F~B?`iG+ml$y %JcKc~<-o(W/8m<ZYar^j9yA|MGzYGf|s$_;RK40jDM.2JmYT0');
define('SECURE_AUTH_SALT', '*i K/7-Pvve/rh7E=60ig:?so)i,jvP8o~j`/[m6_TOhAV[b}E2u(ym@(FF]b(P-');
define('LOGGED_IN_SALT',   'Y(Bl3Ee:x8)9PO#Es(`9_Z^m:2O4l~xw^C+`?s!.c{(il>TyYuu3qd*Vczs}iZ@~');
define('NONCE_SALT',       'VR$dP/u{Co 3@!EMh-E}|Ev# l^_6mU.]Q`TC}[r3py~fHbbAGuUXFsXVX0)Dj%^');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wpbd7845';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
