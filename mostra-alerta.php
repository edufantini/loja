<?php
session_start();
function mostrarAlerta($tipo) {
    if(isset($_SESSION[$tipo])) { ?>
        <div class="alert alert-<?=$tipo?>" role="alert" style="text-align: center;">
            <strong><?=$_SESSION[$tipo]?></strong>
        </div>
        <?php unset($_SESSION[$tipo]);
    }
}