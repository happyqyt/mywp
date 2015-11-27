<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '123456');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%6D9JeT/.BsN Il=zVg1>.vy~q],uLCZL6+.1l6zR6?1~j=v<6o bpF].]kHR]zF');
define('SECURE_AUTH_KEY',  '=kSS!a$Bv8#Bqt?D+Mt:u3&c|HxbTR0ql$obGUb> `FL(<e)bf4 P[J`l)<S[9}}');
define('LOGGED_IN_KEY',    '?9VmG}+vrAQ(.LqC$V.gxk(O{f<~q9AYulfh6w17%^(c=.f yriKhPesvtr<shk+');
define('NONCE_KEY',        'j3d.uT9x~E)xk^d1=AsW5ja d~c/WX+&@Nv*I?3Px,?1|V|*]@HkArvs9z.wE!N;');
define('AUTH_SALT',        'cPh7#g?PLr2(CR:, 9F]K$^(xmd|h5Z$3!Sr#^6`t(]<t6 ^Z=QtRBC+e%K2]EU(');
define('SECURE_AUTH_SALT', 'hA7Vt+#J*YP=OnOmKDW=<kwI<G+l2Aof4Z[+@;}=!VR*Y:,ftS1vRb93Xr$7!H~=');
define('LOGGED_IN_SALT',   '|pDYj~T_n5<85BMF4&$Cb&_=&x]R4kTto8tqZ9xx,1]DU,NVVdJ;B-u}t9pZf}By');
define('NONCE_SALT',       'yVZX&i B)Oba_f#kh)7 oxNk|pYApryo1v-_.gBNB^UYX:O+*n[W$/8n!g`FUSPd');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
