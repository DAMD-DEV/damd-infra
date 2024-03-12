<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'damd00002');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'damd00002');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '5vkAk2YR');

/** MySQL のホスト名 */
define('DB_HOST', '10.201.0.18');

/** データベースのテーブルを作成する際のデータベースの文字セット */
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
define('AUTH_KEY',         'Iad_|K`hsuuJ7@Q|*>6 WsNn-i+ )}/5,#%8}Sk^i! dU<yQQS>!eyw*z)e~)$[&');
define('SECURE_AUTH_KEY',  'j6Y:q6tE~Xsnj2POg!:fryMgz&&+C6#9ge0/8~HN}+K9Bns-ENr|y)Px=u7b![[y');
define('LOGGED_IN_KEY',    'R-B35PUBsi*=wq6LXwN]yq&i.3UH7=liwVYS&4O}]EOKqWh[l]Cw=1zQe}r.uP)>');
define('NONCE_KEY',        '30?aaOikj^0Cf-([& E1OAttt>z-x{?I<* ;>p&]U6DZ4EnlBZ)^c^bQNq9{$3v}');
define('AUTH_SALT',        'S+DuTr)a|#o3&<pE-Y%p4lg<$i17V/{5$-BoK9Cr?}.C0I65z)6/%e05,6%&#GOw');
define('SECURE_AUTH_SALT', '.x|QT{AjW~jt9sgK|S[ZE!izfPhf=T;w~9!JLk_S,xrvN!F/~P}ei^lEt1SQiYX_');
define('LOGGED_IN_SALT',   'VEa]CbLCA!A9K:[}PqwhUO~_Czzr{vo>:fdQ#EJiXcDyH6-5x!&KnS`XX}cNz5Om');
define('NONCE_SALT',       '~)z/}a8bp31OUgV9{twD#d~x 6KjNzkiaeRlwxAe$rA<q9v&lAnyCK2tfL|-VF&g');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
