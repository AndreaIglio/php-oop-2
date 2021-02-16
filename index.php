<?php

// Istruzioni:
// Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
// Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
// Il database e la tabella non devono essere realmente creati.
// Bonus (non tanto facoltativo):
// Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
// Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
// Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.

include __DIR__ . '/classes/user.php';
include __DIR__ . '/classes/role.php';


$users = [

    new Role('Francesco', 'Brazorf', 54, 'francesco.brazorf@gmail.com', 'male', 'user'),


];

array_push($users, $user1, $admin);


var_dump($users);


foreach ($users as $user) {

    if ($user->role === 'admin') { ?>


        <h3><?php echo  'Welcome admin' ?> <?php echo $user->name; ?></h3>
    <?php } else { ?>
        <h3><?php echo  'Welcome user' ?> <?php echo $user->name; ?></h3>
<?php }
}

?>