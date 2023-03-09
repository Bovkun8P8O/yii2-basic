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
    <form action="action.php" method="post">
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

            <select class="form-select" aria-label="Country select" name="countrySelect">
                <option selected>Оберіть країну</option>
                <option value="1">Країна 1</option>
                <option value="2">Країна 2</option>
                <option value="3">Країна 3</option>
            </select>

            <select class="form-select" aria-label="City select" name="citySelect">
                <option selected>Оберіть місто</option>
                <option value="1">Місто 1</option>
                <option value="2">Місто 2</option>
                <option value="3">Місто 3</option>
            </select>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Електронна пошта</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="emali">
            </div>

            <div class="mb-3">
                <label for="exampleInputTel1" class="form-label">Номер телефону</label>
                <input type="tel" class="form-control" id="exampleInputTel1" name="tel">
            </div>

            <div class="mb-3">
                <label for="exampleInputAddress1" class="form-label">Адреса прописки</label>
                <input type="text" class="form-control" id="exampleInputAddress1" name="address1">
            </div>

            <div class="mb-3">
                <label for="exampleInputAddress2" class="form-label">Адреса проживання</label>
                <input type="text" class="form-control" id="exampleInputAddress2" name="address2">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="addressCheck">
                <label class="form-check-label" for="exampleCheck1">Адреса проживання співпадає з адресою
                    проживання</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" value="radio 1" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Default radio 1
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" value="radio" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Default radio
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" value="radio Default" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Default checked radio
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" value="radio 2" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Default radio 2
                </label>
            </div>

            <div class="mb-3">
                <label for="exampleInputCarBrand1" class="form-label">Марка автомобіля</label>
                <input type="text" class="form-control" id="exampleInputCarBrand1" name="carBrand">
            </div>

            <div class="mb-3">
                <label for="exampleInputColor1" class="form-label">Колір автомобіля</label>
                <input type="color" class="form-control" id="exampleInputColor1" name="carColor">
            </div>

            <select class="form-select" aria-label="Credit select" name="creditSelect">
                <option selected>Оберіть суму кредиту</option>
                <option value="1">5,000-10,000</option>
                <option value="2">10,000-15,000</option>
            </select>

            <select class="form-select" aria-label="Currency select" name="currencySelect">
                <option selected>Оберіть валюту</option>
                <option value="1">USD</option>
                <option value="2">UAH</option>
            </select>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="insuranceCheck">
                <label class="form-check-label" for="exampleCheck1">Страхування життя</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="kaskoCheck">
                <label class="form-check-label" for="exampleCheck1">Каско</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="repaymentCheck">
                <label class="form-check-label" for="exampleCheck1">Можливість дострокового погашення кредиту</label>
            </div>

            <div class="input-group">
                <span class="input-group-text">Примітка</span>
                <textarea class="form-control" aria-label="Note" name="note"></textarea>
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupPhoto02">
                <label class="input-group-text" for="inputGroupFile02">Завантажити фото</label>
            </div>

            <div class="mb-3">
                <label for="exampleInputDate2" class="form-label">Запланована дата покупки</label>
                <input type="date" class="form-control" id="exampleInputDate2" name="purchaseDate">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


</body>

</html>