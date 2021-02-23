<?php

// Istruzioni:
// Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
// Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
// Il database e la tabella non devono essere realmente creati.
// Bonus (non tanto facoltativo):
// Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
// Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
// Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.

include_once __DIR__ . '/classes/user.php';
include __DIR__ . '/classes/role.php';
include __DIR__ . '/classes/post.php';




?>
<h3>Insert a name Andrea (admin) or Francesco (user)</h3>
<form action="./index.php" method="get">
    <input type="text" value="" name="name">
</form>


<?php

$nameUser = $_GET['name'];

// var_dump($nameUser);

$users = [

    $user2 = new Role(2, 'Francesco', 'Brazorf', 54, 'francesco.brazorf@gmail.com', 'male', 'user'),

];

array_push($users, $user1);

$posts = [

    $post1 = new Post(1, 1, 'Voliamo', 'post1', 'fantasy'),
    $post1_2 = new Post(2, 1, 'Giro su Marte', 'post1_2', 'action'),
    $post2 = new Post(3, 2, 'Luna', 'post2', 'action'),


];


// var_dump($users);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    foreach ($users as $user) {

        if ($nameUser == $user->name && $user->role == 'admin') { ?>

            <h3><?php echo $user->name . ' ' . 'you are the admin';   ?></h3>



        <?php } elseif ($nameUser == $user->name && $user->role == 'user') { ?>

            <h3><?php echo $user->name . ' ' . 'you are an user';   ?></h3>

            <?php }



        foreach ($posts as $key => $post) {
            // var_dump($user->name);
            if ($nameUser === $user->name && $post->userID === $user->userID) { ?>
                <h3>Post: <?php echo $key ?></h3>
                <p>Title: <?php echo $post->title; ?></p>
                <p>Content: <?php echo $post->content; ?></p>
                <p>Category: <?php echo $post->category; ?></p>


        <?php }
        }
    };


    foreach ($users as $key=>$user) { ?>

        <h3>User <?php echo $key ?></h3>
        <p>Name: <?php echo  $user->name ?></p>
        <p>LastName: <?php echo  $user->lastName ?></p>
        <p>Role: <?php echo $user->role  ?></p>


    <?php }






    ?>



</body>

</html>