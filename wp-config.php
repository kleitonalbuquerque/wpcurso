<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpcurso' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'admin123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B<#1v_1yo3(ne&gm6x(!%/%[AnvJBr]n~KI+#;w:xO)7NmA1<9X4y?d$JYs/F)ub' );
define( 'SECURE_AUTH_KEY',  'T./#q-eYHU,)zp=BeRlsVUH|bzX0a0T7E<DUJajIXb9<UX:GZn7qB:BxcNZ@A[6,' );
define( 'LOGGED_IN_KEY',    '[B(S2G+.MaA3l86}/PIZx0=hfl_r7M&@c n^7FXGD(t_[LIz[a[%]jrJ{!{pSSnq' );
define( 'NONCE_KEY',        '=<n9jy,P7F<u-bh=i9+>fNeR|P8X#LR^~l4Y%pH@f,|D6TU}O>Gh<Jt!~tn;~An7' );
define( 'AUTH_SALT',        '!p*%?oo-{YdS4Gcz0:>fCc6U$I8~mqjOZ!fz)+!#+tM56Rb6j;DV#@5g`GLGA2h~' );
define( 'SECURE_AUTH_SALT', 't56cXHRc@+_tp~<U7aqms8WpT%,>{K;(8iPWzzYO2GBY.;s:]0pV?ng;!cVM&!,_' );
define( 'LOGGED_IN_SALT',   'LD4C6&02YUK|nyyxEz7Kyd,)$^)Uzt=C~,tIUBg>Az;`8<:?HxfEs%RsfZ0[B :Y' );
define( 'NONCE_SALT',       'S<bkM; OKT}.n> 8zR~`@4okWMRJLp)XRe1i(bdHa7`d##nqRZoUAr)?K&r,Y#Pn' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
