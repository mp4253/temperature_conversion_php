<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
    <style>
        *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 100;
    font-size: large;
}
    h1{
        text-align: center;
        line-height: 20vh;
        color: blue;
        font-family: 'Times New Roman', Times, serif;
        font-size: 60px;
        font-weight: bold;
    }

    .main-dev{
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .left-side{
        background-color: blue;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;

    }

    .right-side{
        width: 400px;
        height: 300px;
        background-color: violet;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    p{
        margin: 20px;

    }

    .input1{
        width: 250px;
        height: 40px;
        padding: 5px;
        outline: none;
        border-radius: 1px solid blue;
        border-radius: 5px;
    }

    .selection{
        width: 100%;
        height: 20px 0;
        padding: 10px 10px;
        font-size: 90%;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
    }

    .button{
        padding: 10px 16px;
        border-radius: 5px;
        outline: none;
        border-radius: none;
        font-size: 90%;
    }

    </style>
</head>
<body>

    <header>

        <h1>Temperature Conversion</h1>

        <div class="main-dev">
            <div class="left-side">
                <img src="./celsius.jpg"/>
            </div>
            <div class="right-side">
                <form method="POST">
                    <input type="text" name="num" placeholder="Enter your number" class="input1"/>

                    <div class="selection">
                        <input type="radio" name="units" value="cel"/>
                        <label>Celsius</label>

                        <input type="radio" name="units" value="fah"/>
                        <label>Farenheit</label>
                    </div>

                    <input type="submit" name="submit" value="Convert now" class="button"/>
                </form>
                <div>
                    <p>
                        <?php

                        if(isset($_POST['submit'])){
                            $number = $_POST['num'];
                            $temperature = $_POST['units'];

                            if($temperature == "cel"){
                                $result = $number * 9 / 5 + 32;
                                echo "The conversion value of celsius to farenheit is: ", $result;
                            }
                            else{
                                $result = ($number - 32) * 5 / 9;
                                echo "The conversion value of farenheit to celsius is: ", $result;
                            }
                        }

                        ?>
                    </p>
                </div> 
            </div>
        </div>
    </header>
    
</body>
</html>