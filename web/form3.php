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
    <form action="action3.php" method="post">
        <div class="container">
            <div class="mb-3">
                <label for="exampleInputPIB1" class="form-label">ПІБ</label>
                <input type="text" class="form-control" id="exampleInputPIB1" aria-describedby="TextHelp" name="name">
                <!-- <div id="PIBHelp" class="form-PIB">We'll never share your PIB with anyone else.</div> -->
            </div>

            <div class="mb-3">
                <label for="exampleInputDate1" class="form-label">Дата народження</label>
                <input type="date" class="form-control" id="exampleInputDate1" name="birthday">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioSex" value="Чоловіча" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Чоловіча стать
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioSex" value="Жіноча" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Жіноча стать
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioCongrat" value="Так"
                    id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault1">
                    Вітати буду
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioCongrat" value="Ні"
                    id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault1">
                    Вітати не буду
                </label>
            </div>

            <div>
                <p>Куди піти на 8 березня?</p>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="placeCheck" value="У кіно">
                <label class="form-check-label" for="exampleCheck1">У кіно</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="placeCheck" value="У кафе">
                <label class="form-check-label" for="exampleCheck1">У кафе</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="placeCheck" value="У кофейню">
                <label class="form-check-label" for="exampleCheck1">У кофейню</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="placeCheck" value="У піцерію">
                <label class="form-check-label" for="exampleCheck1">У піцерію</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="placeCheck" value="До когось у квартиру">
                <label class="form-check-label" for="exampleCheck1">До когось у квартиру</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="placeCheck" value="До когось на дачу">
                <label class="form-check-label" for="exampleCheck1">До когось на дачу</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="placeCheck" value="На пікнік">
                <label class="form-check-label" for="exampleCheck1">На пікнік</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="placeCheck" value="На полювання">
                <label class="form-check-label" for="exampleCheck1">На полювання</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="placeCheck" value="На риболовлю">
                <label class="form-check-label" for="exampleCheck1">На риболовлю</label>
            </div>

            <div>
                <p>Що подарувати?</p>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="presentCheck" name="presentCheck" value="Золото">
                <label class="form-check-label" for="presentCheck">Золото</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="presentCheck" name="presentCheck" value="Срібло">
                <label class="form-check-label" for="presentCheck">Срібло</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="presentCheck" name="presentCheck" value="Біжутерія">
                <label class="form-check-label" for="presentCheck">Біжутерія</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="presentCheck" name="presentCheck" value="Сумочка">
                <label class="form-check-label" for="presentCheck">Сумочка</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="presentCheck" name="presentCheck" value="Барсетка">
                <label class="form-check-label" for="presentCheck">Барсетка</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="presentCheck" name="presentCheck"
                value="Боксерські рукавички">
                <label class="form-check-label" for="presentCheck">Боксерські рукавички</label>
            </div>

            <div>
                <p>Бюджет на подарунки:</p>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioBudget" value="300"
                    id="flexRadioBudget1">
                <label class="form-check-label" for="flexRadioDefault1">
                    до 300 гривень
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioBudget" value="300-500"
                    id="flexRadioBudget2">
                <label class="form-check-label" for="flexRadioDefault1">
                    300-500 гривень
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioBudget" value="500-1000"
                    id="flexRadioBudget3">
                <label class="form-check-label" for="flexRadioDefault1">
                    500-1000 гривень
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioBudget" value="1000+"
                    id="flexRadioBudget4">
                <label class="form-check-label" for="flexRadioDefault1">
                    Більше 1000 гривень
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


</body>

</html>