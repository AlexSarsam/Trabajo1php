<?php
$maraton = 8;
$numero_de_peliculas = 4;
$pelicula = [
    ['title' => 'Jujutsu Kaisen', 'duration' => 120],
    ['title' => 'Culling Games', 'duration' => 95],
    ['title' => 'Chainsaw man', 'duration' => 110],
    ['title' => 'Attack on Titan', 'duration' => 80]
];
?>

<section id="movies" class="section card hidden">
    <h2>Maratón de películas</h2>
    <p>He reservado <?php echo $maraton; ?> horas para ver <?php echo $numero_de_peliculas; ?> películas.</p>
    
    <table class="movies-table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Duración (min)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pelicula as $maraton): ?>
            <tr>
                <td><?php echo $maraton['title']; ?></td>
                <td><?php echo $maraton['duration']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>