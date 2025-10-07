<?php

$registration =  120.00;
$workshop =  45.50;
$total = $registration + $workshop;
?>
<section id="event" class="section card" role="region" hidden >
    <h2 id="event-heading">Coste del evento</h2>
    <div class="ticket">
        <dl class="ticket-grid">
            <div class="row"><dt>Inscripción</dt><dd><?php echo number_format($registration,2,',','.'); ?> €</dd></div>
            <div class="row"><dt>Taller adicional</dt><dd><?php echo number_format($workshop,2,',','.'); ?> €</dd></div>
            <div class="row total-row"><dt>Total</dt><dd class="total"><?php echo number_format($total,2,',','.'); ?> €</dd></div>
        </dl>
    </div>
</section>
