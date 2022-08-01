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
define( 'DB_NAME', 'wp_tema' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'usbw' );

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
define( 'AUTH_KEY',         ')6}O7+4Lx:!=$8*Wm3YI,7,}Hq9=UrpBv<{)yS.<m|NH{SSRhPBb-i*d+Y+*#9mG' );
define( 'SECURE_AUTH_KEY',  'gRno7%_pn|}/;fL1&)B1p (I%l7.h@i]pbW-7TpK]Qd6:4} =0cp4xryW{+Uv/&&' );
define( 'LOGGED_IN_KEY',    'XvHb?(Lll!,NLqK>7(c$:uVXSN7)9_a.8MY5o1z6h A0,Xs||Yo0&#S>U~Tg|kZf' );
define( 'NONCE_KEY',        ';Q2ar~? v)#x=0E9xIGtL5:bWR(7DIX7fcjN00qjV:YP-0DW-Cz .jG)[i%}!*?x' );
define( 'AUTH_SALT',        'Pj2{=|I9iWk}|{f(D >;:4}Q3)yIn /f$l+bygYJK-uN!z_`vetAv.//D@[:CrL@' );
define( 'SECURE_AUTH_SALT', 'a1`:m%gb@w7M?/?)nUimC1E/n{JRVW}-W5.KGrL[O/PO=e#Hw2k#Dr.h=OkhK e4' );
define( 'LOGGED_IN_SALT',   'B@(A1b3O0UZ}iUQ3lps{Rr?BcsSS+GFOk/S4q2=8uzTT<0YyTSTQEf(a$l(f*qN2' );
define( 'NONCE_SALT',       '*Q_l*P|[pb~c@B[E,1L3YgwMR6111DR%<.sH;_orScwqo709A>$$Q[8;CNV+0OeD' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
