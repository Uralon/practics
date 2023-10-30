<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>классы и объекты</title>
</head>

<body>


    <h1>Описания животных</h1>
    <div class="sections">

        <?php
        class Animal
        {
            public $weight, $age, $color;
        }
        class Lion extends Animal
        {
            public $canine_length;
            function do()
            {
                echo "<h1>Лев</h1>" . "<p>" . $this->canine_length . " - длина клыка;</p>" . "<p>" . $this->weight . " - вес;</p>" . "<p>" . $this->age . " - возраст;</p>" . "<p>" . $this->color . " - окрас.</p>";
            }
        }

        class Rabbit extends Animal
        {
            public $ear_length;
            function do()
            {
                echo "<h1>Кролик</h1>" . "<p>" . $this->ear_length . " -длина ушей;</p>" . "<p>" . $this->weight . " - вес;</p>" . "<p>" . $this->age . " - возраст;</p>" . "<p>" . $this->color . " - окрас.</p>";
            }
        }


        class Wolf extends Animal
        {
            public $tail_length;
            function do()
            {
                echo "<h1>Волк</h1>" . "<p>" . $this->tail_length . " -длина хвоста;</p>" . "<p>" . $this->weight . " - вес;</p>" . "<p>" . $this->age . " - возраст;</p>" . "<p>" . $this->color . " - окрас.</p>";
            }
        }


        ?>
        <div class="sections-block">

            <?php
            $lion = new Lion();
            $lion->canine_length = "12см";
            $lion->weight = "190";
            $lion->age = "14";
            $lion->color = "оранжевый";
            $weightLion = $lion->weight;
            $ageLion = $lion->age;
            $colorLion = $lion->color;


            $lion->do();

            ?>
        </div>
        <div class="sections-block">
            <?php
            $rabbit = new Rabbit();
            $rabbit->ear_length = "10см";
            $rabbit->weight = "2";
            $rabbit->age = "6";
            $rabbit->color = "белый/коричневый";
            $weightRabbit = $rabbit->weight;
            $ageRabbit = $rabbit->age;
            $colorRabbit = $rabbit->color;


            $rabbit->do();
            ?>
        </div>
        <div class="sections-block">
            <?php
            $wolf = new Wolf();
            $wolf->tail_length = "22см";
            $wolf->weight = "45";
            $wolf->age = "12";
            $wolf->color = "серый";

            $weightWolf = $wolf->weight;
            $ageWolf = $wolf->age;
            $colorWolf = $wolf->color;

            
            $wolf->do();


            ?>
        </div>
    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            /* color: #fff; */
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        body>h1 {
            font-size: 44px;
            text-align: center;
            margin-bottom: 40px;
            /* stroke: red;
            stroke-width: 20px; */
        }

        p {
            font-size: 24px;
            margin-bottom: 4px;
        }

        body {
            background: #bde0fe;
            padding: 30px;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            display: flex;align-items: center;justify-content: center;flex-direction: column;
        }

        .sections {
            display: flex;
            align-items: start;
            justify-content: space-between;
            gap: 80px;
        }

        .sections-block{
            /* background: #bde0fe; */
            border: 4px solid #fff;
            border-radius: 50px;
            padding: 40px;
            transition: 0.3s ease;
        }
        .sections-block:hover{
        transform: scale(1.2);
        }
    </style>
</body>

</html>