<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">

        <p>ПІБ: 
            <?php echo htmlspecialchars($_POST['name']); ?>.
        </p>

        <p>Дата народження: 
            <?php echo $_POST['birthday']; ?>.
        </p>

        <p>Стать: 
            <?php
            if (isset($_POST["flexRadioSex"])) {
                $flexRadioSex = $_POST["flexRadioSex"];
                echo $flexRadioSex;
            }
            ?>
        </p>

        <p>Вітати буде? 
            <?php
            if (isset($_POST["flexRadioCongrat"])) {
                $flexRadioCongrat = $_POST["flexRadioCongrat"];
                echo $flexRadioCongrat;
            }
            ?>
        </p>

        <p>Куди піти:
            <?php
            if (isset($_POST["placeCheck"])) {
                $placeCheck = $_POST["placeCheck"];
                echo $placeCheck;
            }
            ?>
        </p>

        <p>Дарунок:
            <?php
            if (isset($_POST["presentCheck"])) {
                $presentCheck = $_POST["presentCheck"];
                echo $presentCheck;
            }
            ?>
        </p>
 
        <p>Бюджет:
            <?php
            if (isset($_POST["flexRadioBudget"])) {
                $flexRadioBudget = $_POST["flexRadioBudget"];
                echo $flexRadioBudget;
            }
            ?>
        </p>

    </div>

</body>

</html>