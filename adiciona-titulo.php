<? //Não inserir essa linha

//Shortcode para adicionar título da página em locais personalizados
//adicione até a linha 8 no arquivo function.php do tema filho (child theme) ativo ou em um arquivo de plugin.
function page_title_sc( ){
   return get_the_title();
}
add_shortcode( 'lab82_titulo_pagina', 'page_title_sc' );

//não inserir essa linha ?>

<!-- adiciononar onde o título será exibido via painel do Wordpress -->
[lab82_titulo_pagina]

<!-- para adicionar o shortcode direto no arquivo php do tema. caso precise, remover as tags php -->
<?php echo do_shortcode( '[lab82_titulo_pagina]' ); ?>
