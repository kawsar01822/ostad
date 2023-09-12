<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Temparature Converter</title>
    </head>

    <body>
        <div class="container">
            <form action="temperature_converter.php" method="post" class="col-md-6 offset-md-3" onsubmit="return validateForm();">
                <h1>Temparature Converter</h1>
                <div class="mb-3">
                    <label for="temperature" class="form-label">Temperature</label>
                    <input type="number" class="form-control" placeholder="write a temparature" id="temperature" name="temperature">
                </div>
                <div class="mb-3">
                    <label for="options" class="form-label">Select</label>
                    <select class="form-select" id="options" name="options">
                        <option value="celsius">Celsius to Fahrenheit</option>
                        <option value="fahrenheit">Fahrenheit to Celsius</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Convert</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            function validateForm(){
                var temperature = document.querySelector("#temperature").value.trim();
                if (temperature == "") {
                    alert("Please write a temparature");
                    document.querySelector("#temperature").focus();
                    return false;
                }
                else{
                    return true;
                }
                return false;
            }
        </script>

    </body>
</html>


<?php

    // Task 2
    
    if(isset($_POST['submit']))
    {
        $temperature = $_POST['temperature'];
        $options = $_POST['options'];
        $res = null;
        if($options == "celsius")
        {
            $fahrenheit = ($temperature * 9/5) + 32;
            $fahrenheit = number_format((float)$fahrenheit, 2, '.', '');
            $res = "<b>$temperature</b> Celsius is equal to <b>$fahrenheit</b> Fahrenheit";
        }
        else
        {
            $celsius = ($temperature - 32) * 5/9;
            $celsius = number_format((float)$celsius, 2, '.', '');
            $res = "<b>$temperature</b> Fahrenheit is equal to <b>$celsius</b> Celsius";
        }

        echo "<br/><h4 class='text-center'>$res</h4>";
    }
