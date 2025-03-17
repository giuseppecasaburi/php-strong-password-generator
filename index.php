<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>

<body>
    <h1>Password Generator</h1>

    <div class="container">
        <div class="container-form">
            <form action="./result.php" method="POST">
                <div>
                    <label for="password-length">Lunghezza password</label>
                    <input type="number" name="password-length" id="" required min=0 max=18>
                </div>
                <div>
                    <label for="letters">Lettere maiuscole</label>
                    <input type="checkbox" name="letters" id="">
                </div>
                <div>
                    <label for="numbers">Numeri</label>
                    <input type="checkbox" name="numbers" id="">
                </div>
                <div>
                    <label for="special-words">Caratteri speciali</label>
                    <input type="checkbox" name="special-words" id="">
                </div>
                <button type="submit">Genera password</button>
            </form>
        </div>
    </div>
</body>

</html>