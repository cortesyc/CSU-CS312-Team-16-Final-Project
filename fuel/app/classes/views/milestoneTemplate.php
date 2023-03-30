<!DOCTYPE html>
<div class="demo">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <?php echo Asset::css($css) ?>
    <style>
        img {
            width: 150px;
            padding-right: 15px;
            float: left;
        }
    </style>
</head>
<body>
    <header>
        <?php echo Asset::img("Terra-Color.png", array("alt" => "Terra Logo"));  ?>
        <nav>
            <ul>
                <li><a href="https://www.cs.colostate.edu:4444/~ashakap/m1/fuelviews/index/milestone/index">Home</a></li>
                <li><a href="https://www.cs.colostate.edu:4444/~ashakap/m1/fuelviews/index/milestone/about">About</a></li>
                <li><a href="https://www.cs.colostate.edu:4444/~ashakap/m1/fuelviews/index/milestone/generator">Color Generator</a></li>
            </ul>
        </nav>
    </header>

    <?php echo $content ?>
</body>
</div>
</html>
