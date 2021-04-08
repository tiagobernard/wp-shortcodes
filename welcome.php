<?php
// mensagem de boas vindas - insira até a linha 13 no arquivo functions.php do tema
// é possível usar outros além do display_name... user_firstname, user_lastname, user_login, user_nicename, user_email
	function show_loggedin_function( $atts ) {
	global $current_user, $user_login;
		  get_currentuserinfo();
	add_filter('widget_text', 'do_shortcode');
	if ($user_login) 
	return 'Olá ' . $current_user->display_name . '!' . '<a style="text-decoration:none; background-color:#531869; color:#fff; padding:2px 3px;cursor:pointer;" href="' . wp_logout_url() . '">Sair</a>'; //personalize os estilos de acordo com o projeto
	else
	return 'Olá visitante! ' . '<a style="text-decoration:none; background-color:#531869; color:#fff; padding:0 5px;cursor:pointer;" href="' . site_url() . '/minha-conta/">Criar conta/Entrar</a>'; //personalize os estilos de acordo com o projeto
	
	}
	add_shortcode( 'welcome_lab82', 'show_loggedin_function' );

//adicionar esse shortcode onde quer que a mensagem de boas vindas apareça
[welcome_lab82]

?>
