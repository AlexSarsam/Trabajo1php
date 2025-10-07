<?php

$nombre = ' Hola me llamo Alex ';
$role = ' y soy Developer Junior';
$biografia = 'Actualmente estoy estudiando PHP y desarrollo web.';
$descripcion= 'Me gusta aprender cosas nuevas y mejorar mis habilidades de programación.';
?>


<section id="profile" class="section card">
    <h2>Perfil</h2>
    <div class="profile-grid">
        <div>
            <p><strong><?php echo $nombre; ?> <?php echo $role; ?></strong></p>
            <p><?php echo $biografia; ?></p>
            <p><?php echo $descripcion; ?></p>
        </div>
    </div>
</section>