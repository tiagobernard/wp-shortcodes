<? //Não inserir essa linha

//Shortcode para adicionar menu
//adicione até a linha 9 no arquivo functions.php do tema
function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false ) );
}
add_shortcode('addmenulab82', 'print_menu_shortcode');

// adiciononar onde o menu será exibido (via painel do Wordpress)
[addmenulab82 name="nome-do-menu" class="classe-css"]

//Para adicionar o shortcode direto no arquivo php
echo do_shortcode( '[addmenulab82 name="nome-do-menu" class="classe-css"]' );

//substituir nome-do-menu pelo slug do menu a ser exibido. Caso tenha classe css exclusiva para o menu, substituir sua-classe pelo nome da classe. Caso não tenha, remover class="classe-css" do shortcode

//Não inserir essa linha ?>
