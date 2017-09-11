<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            echo '<h1>Marianne Nielsen - Assignment BE.3.0</h1>';
            require_once './includes/Vehicle.inc.php';
            require_once './includes/Truck.inc.php';
            require_once './includes/Bicycle.inc.php';
            require_once './includes/Car.inc.php';
            require_once './includes/Product.inc.php';
            require_once './includes/Book.inc.php';
            require_once './includes/DVD.inc.php';
            require_once './includes/LiveLecture.inc.php';
            
            $v1 = new Vehicle('Suzuki', 'Silver', 'Alice');
            printf("<p>%s</p>\n", $v1);

            $v2 = new Truck('Scania', 'Red', 'Otto', 18);
            printf("<p>%s</p>\n", $v2);

            $v3 = new Bicycle('Moser', 'Blue', 'Francesco');
            printf("<p>%s</p>\n", $v3);

            $v4 = new Car('Tesla', 'Black', 'Batman', 4, FALSE);
            printf("<p>%s</p>\n", $v4);
            
            echo '<hr />';
            echo '<h1>Marianne Nielsen - Assignment BE.3.1<br /><br />';
            
            $book = new Book('IT Kommunikation', 172);
            $film = new DVD('Avatar', '1 h 5 m');
            $ll = new LiveLecture('Web back.prog.', 'Niels', 45, 'Abstract classes');
            
            $book->display();
            echo $film->display(); 
            $ll->display();
                   
        ?>
    </body>
</html>