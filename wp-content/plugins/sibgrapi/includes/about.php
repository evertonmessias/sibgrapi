<?php
// about *************************************************
function agenda_page_about()
{ ?>
    <div class="about-sibgrapi">
        <h1 class="title">Sobre o plugin SIBGRAPI</h1>
        <p>O plugin <b>SIBGRAPI</b> foi desenvolvido para proporcionar o gerenciamento de agendas e eventos anuais.
        </p>
        <ul>
            <li><a href="https://github.com/evertonmessias/sibgrapi" target="_blank">Link do Projeto</a></li>
            <li><a href="https://ic.unicamp.br/~everton" target="_blank">Site do Desenvolvedor</a></li>
        </ul>        
    </div>
<?php
}

function agenda_about()
{
    add_submenu_page('edit.php?post_type=agenda', 'Sobre', 'Sobre', 'manage_options', 'agenda_about', 'agenda_page_about');
}
add_action('admin_menu', 'agenda_about');
