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
    $hotel_values = [
        'name' => 'Nome Hotel',
        'description' => 'Descrizione Hotel',
        'parking' =>'Parcheggio',
        'vote' =>'Voto',
        'distance_to_center' =>'Distanza dal centro',
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotels</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="style\style.css">
        
    </head>
    <body>

        <header>
            <h1>Prenotazioni.com</h1>

        </header>
        
        <div class="container d-flex">
            <section id="filters" class="d-flex rounded w-100 justify-self-center">
                <h3 class="w-100 text-center">Filtra per:</h3>
                <form class="d-flex justify-content-around w-100 flex-wrap">
                    <div class="filter form-check form-switch">
                        <label class="form-check-label" for="park">Parcheggio</label>
                        <br>
                        <input class="form-check-input text-center" type="checkbox" role="switch" id="park">
                    </div>
                    <div class="filter">
                        <label for="vote_range" class="form-label">Voto</label>
                        <input type="range" class="form-range" min="0" max="5" id="vote_range">
                    </div>
                    <div class="filter">
                        <label for="distance_range" class="form-label">Distanza</label>
                        <input type="range" class="form-range" min="0" max="100" id="distance_range">
                    </div>
                    <span class="w-100 d-flex mt-2 justify-content-center">
                        <button type="button" class="btn btn-primary">Filtra</button>
                    </span>
                </form>
            </section>

            <main class="w-100">
                <section id="find">
                    <table class="table table-hover table-striped-columns">
                        <thead>
                            <tr>
                                <th class="index"></th>
                                <?php foreach ($hotel_values as $value) : ?>
                                    <th scope="col" class="text-center <?php 
                                    if($value==='Nome Hotel') $col="col-2"; 
                                    elseif($value==='Descrizione Hotel') $col="col-4";
                                    elseif($value==='Voto') $col="col-1"; 
                                    else  $col="col-2"; 
                                    echo $col ?>">
                                    <?php echo $value ?>
                                </th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i<count($hotels); $i++) : ?>
                                <tr>
                                    <th scope="row" class="text-center"><?php echo $i ?></th>
                                    
                                    <?php foreach ($hotels[$i] as $key => $option) : ?>
                                        <td class="<?php  if($key==='parking' || $key==='vote' || $key==='distance_to_center') echo 'text-center'?>" >   
                                            <?php 
                                        if($key==='parking' && $option == '1') 
                                        echo '<i class="fa-solid fa-check text-success"></i>';
                                    
                                        elseif($key==='parking' && $option == '0') 
                                        echo '<i class="fa-solid fa-xmark text-danger"></i>';
                                
                                        else echo $option ?>
                                        <?php if($key==='distance_to_center') echo ' Km' ?>
                                        </td>
                                    <?php endforeach; ?>    
                                    
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </section>
            </main>        
               
        </div>

            </body>
            </html>