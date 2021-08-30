<?php
// about *************************************************
function schedule_page_about()
{ ?>
    <div class="about-sibgrapi">
        <h1 class="title">About plugin SIBGRAPI</h1>
        <p>Plugin <b>SIBGRAPI</b> was developed to provide management of annual schedules and events.</p>
        <ul>
            <li><a href="https://github.com/evertonmessias/sibgrapi" target="_blank">Project Link</a></li>
            <li><a href="https://ic.unicamp.br/~everton" target="_blank">Developer Website</a></li>
        </ul>        
    </div>
<?php
}

function schedule_about()
{
    add_submenu_page('edit.php?post_type=schedule', 'About', 'About', 'manage_options', 'schedule_about', 'schedule_page_about');
}
add_action('admin_menu', 'schedule_about');
