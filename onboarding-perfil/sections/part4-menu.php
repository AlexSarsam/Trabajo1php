<?php
$plato = 'Paella mixta';
$precio = 16.5;
?>

<section id="menu" class="section card hidden">
    <h2>Menú favorito</h2>
    <div class="menu-card">
        <div class="plato"><strong><?php echo $plato; ?></strong></div>
        <div class="precio">Precio estimado: <strong><?php echo number_format($precio, 2); ?>€</strong></div>
    </div>
</section>