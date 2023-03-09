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

        <p>Hi
            <?php echo htmlspecialchars($_POST['name']); ?>.
        </p>
        <p>You are
            <?php echo $_POST['birthday']; ?> years old.
        </p>
        <p>You chose this country:
            <?php echo $_POST['countrySelect']; ?>.
        </p>
        <p>You chose this city:
            <?php echo $_POST['citySelect']; ?>.
        </p>
        <p>Your email is
            <?php echo $_POST['email']; ?>.
        </p>
        <p>Your phone number is
            <?php echo $_POST['tel']; ?>.
        </p>
        <p>Your address of registration is
            <?php echo $_POST['address1']; ?>.
        </p>
        <p>Your address of residence is
            <?php echo $_POST['address2']; ?>.
        </p>

        <p>
            <?php
            if (isset($_POST["addressCheck"])) {
                $addressCheck = $_POST["addressCheck"];
                echo "Адреси співпадають";
            }
            ?>
        </p>

        <p>
            <?php
            if (isset($_POST["flexRadioDefault"])) {
                $flexRadioDefault = $_POST["flexRadioDefault"];
                echo $flexRadioDefault/*"Radio 1"*/;
            }
            ?>
        </p>

        <!-- <p>
            <?php
            if (isset($_POST["flexRadioDefault"])) {
                $flexRadioDefault = $_POST["flexRadioDefault"];
                echo "Radio 2";
            }
            ?>
        </p>
 -->
        <p>You chose
            <?php echo $_POST['carBrand']; ?> car brand.
        </p>
        <p>You chose
            <?php echo $_POST['carColor']; ?> car color.
        </p>
        <p>You chose
            <?php echo $_POST['creditSelect']; ?> credit sum.
        </p>
        <p>You chose
            <?php echo $_POST['currencySelect']; ?> currency.
        </p>
        <p>
            <?php
            if (isset($_POST["insuranceCheck"])) {
                $insuranceCheck = $_POST["insuranceCheck"];
                echo $insuranceCheck;
            }
            ?>
        </p>
        <?php
        if (isset($_POST["kaskoCheck"])) {
            $kaskoCheck = $_POST["kaskoCheck"];
            echo $kaskoCheck;
        }
        ?>
        <?php
        if (isset($_POST["repaymentCheck"])) {
            $repaymentCheck = $_POST["repaymentCheck"];
            echo $repaymentCheck;
        }
        ?>
        <p>You have chosen this purchase date:
            <?php echo $_POST['purchaseDate']; ?>.
        </p>
        Your note is
        <?php echo $_POST['note']; ?>.</p>
    </div>

</body>

</html>