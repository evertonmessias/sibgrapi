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

define('WP_HOME','https://sibgrapi.sbc.org.br');
define('WP_SITEURL','https://sibgrapi.sbc.org.br');

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'sibgrapiportal' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'sibgrapiportal' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '@#23wesdXC' );

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
define( 'AUTH_KEY',         'QK1GsBI}]^,H~~7BV8xG2qC2,4B(7%@cc8+fx]6}*4Da](L1>[3D&@CnLxcFX?DM' );
define( 'SECURE_AUTH_KEY',  '1)}f8^Zn6xJR^Q[Uw[?&S2|g-3mqN/ :}MJhDd,K~{Jfa2U(Y:U1Q@@at=!:Gb?n' );
define( 'LOGGED_IN_KEY',    '^@Mn{S,)oW`N L&|D$FdLK*-j/[~o[1#H`@/)c>[?|Z8^:/=YM VRgt5ML+G8_>X' );
define( 'NONCE_KEY',        ']-O_fSg6`jY9n&R7}eUR*pyDZNio{C1gUg ^D),in4+Y3fFrl_9Pl)HDOR=EVij9' );
define( 'AUTH_SALT',        ':tvT8M jq**;jcfs/8Fc-ZK_ ?9k$MhHycGKS}HBA3M+W@[038de5c6q20]m9zKj' );
define( 'SECURE_AUTH_SALT', 'eM4IuYP09Om2a#/]C0pS$rXoAf@T@H(4z%<T-Gv%,&,[at!e#goSzgdenm;EyT<#' );
define( 'LOGGED_IN_SALT',   '7x.FlGW l&g,,8TJW1n?OdhC1r)Z_/{RLz:-iL&#} LiKW26rrDc,*rw>AEYNOZk' );
define( 'NONCE_SALT',       '#B~G<o$hzAU!> o_]8&C[|B?tGDLFU3mM%-Vc!`#m.ZC?#x1EKI8Q)%JNF-r)Ou8' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
