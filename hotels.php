<?php
    $parkingFilter = ($_GET['parking'] == "si") ? true : false;
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</head>
<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="hotels.php">
                        <label for="">parcheggio</label>
                        <select name="parking" id="parking">
                            <option value="" selected>All</option>
                            <option value="si">Si</option>
                        </select>
                        <button class="btn" type="submit">invia</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <?php foreach($hotels[0] as $key => $value) { ?> 
                            <td scope="col"><?php echo "$key" ?></td>
                        <?php } ?>  
                    </tr>
                </thead>
                <tbody> 
                    <?php foreach ($hotels as $hotel) { ?>
                        <?php if (!$parkingFilter || ($parkingFilter && $hotel['parking']) ) {?>
                            <tr>
                                <?php 
                                foreach($hotel as $key => $value) { 
                                    if ($value === true) {
                                        $value = "si";
                                    } else if (!$value === true){
                                        $value = "no";
                                    }
                                ?> 
                                    <td scope="col"><?php echo "$value" ?></td>
                                <?php } ?>
                        <?php } ?>
                        </tr>
                    <?php } ?> 
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>