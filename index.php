<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    function parking() {
        $parking = $hotels[$i]['parking'];
        if ($parking == true) {
            echo "Presente";
        }
        elseif ($parking == false) {
            echo "Non Presente";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--link css-->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- link BootStrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>PHP Hotel</title>
</head>
<body>
    <header>
        <div class="container text-center">
            <h1>
                PHP Hotel
            </h1>
        </div>
    </header>
    <main>
        <!-- lista dati array -->
        <div class="container">
            <ul>
                <?php
                    for ($i = 0; $i < $hotels[$i]; $i++) {
                ?>
                    <li>
                        <?php var_dump($hotels[$i]);?>
                    </li>
                <?php
                    }
                ?>
            </ul>    
        </div>

        <!-- tabella dati array -->
        <div class="container p-3">
            <div class="row justify-content-center">
                <div class="col-2 p-2 text-center border">
                    <h5>
                        Name
                    </h5>
                </div>
                <div class="col-2 p-2 text-center border">
                    <h5>
                        Description
                    </h5>
                </div>
                <div class="col-2 p-2 text-center border">
                    <h5>
                        Parking
                    </h5>
                </div>
                <div class="col-2 p-2 text-center border">
                    <h5>
                        Vote
                    </h5>
                </div>
                <div class="col-2 p-2 text-center border">
                    <h5>
                        Distance to center
                    </h5>
                </div>
            </div>
            <?php
                for ($i = 0; $i < $hotels[$i]; $i++) {
            ?>
                <div class="row justify-content-center">
                    <div class="col-2 p-2 text-center border">
                        <b>
                            <?php echo($hotels[$i]['name']);?>
                        </b>
                    </div>
                    <div class="col-2 p-2 text-center border">
                        <p>
                            <?php echo($hotels[$i]['description']);?>
                        </p>
                    </div>
                    <div class="col-2 p-2 text-center border">
                        <p>
                            <?php echo(parking());?>
                        </p>
                    </div>
                    <div class="col-2 p-2 text-center border">
                        <p>
                            <?php echo($hotels[$i]['vote']);?>
                            <i class="fa-regular fa-star text-warning"></i>
                            <i class="fa-regular fa-star text-warning"></i>
                            <i class="fa-regular fa-star text-warning"></i>
                        </p>
                    </div>
                    <div class="col-2 p-2 text-center border">
                        <p>
                            <?php echo($hotels[$i]['distance_to_center']);?>
                            Km
                        </p>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </main>
    
    <!--link js-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>