<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta's -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- own stylesheet -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- title -->
    <title>Van Loon</title>
</head>

<body class="bg-secondary">

    <div class="container-fluid">
        <div class="row justify-content-center pt-md-5 pt-4">
            <div class="col-lg-4 col-md-6 col-12">
                <img src="https://www.vanloonvlees.nl/wp-content/uploads/logo-vlv.svg" alt="vanLoon logo">
            </div>
        </div>
    </div>

    <div class="container-fluid pt-md-5 pt-4">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8 col-12 justify-content-center text-center">
                <?php 
                    if (isset($_GET['date']) && (!empty($_GET['date']))) {

                        $yearNow = date("Y");

                        $year = new DateTime('01-01-' . $yearNow);
                        $date = new DateTime($_GET["date"]);
                        
                        $datetime1 = $year;
                        $datetime2 = $date;
                        $interval = $datetime1->diff($datetime2);
                        echo $interval->format('%a');
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a href="../../index.php" class="btn btn-success">BACK</a>
                        </div>
                    </div>
                </div>
                <?php
                } else {
                echo 'Niet alle waardes zijn volledig ingevuld!';
                echo '<a href="../../index.php">Klik hier om terug te gaan</a>';
                }
                ?>
            </div>

        </div>
    </div>



</body>


<!-- own scrips -->
<script src=" ./assets/js/main.js"> </script>

<!-- bootstrap scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>