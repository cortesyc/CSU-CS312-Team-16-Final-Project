<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <?php echo Asset::css($css) ?>
</head>
<body>
    <header>
        <h2>Logo</h2>
        <nav>
            <ul>
                <li><a href="https://www.cs.colostate.edu:4444/~so0nho/m1">Home</a></li>
                <li><a href="https://www.cs.colostate.edu:4444/~so0nho/m1/index/milestone/about">About</a></li>
                <li><a href="https://www.cs.colostate.edu:4444/~so0nho/m1/index/milestone/generator">Color Generator</a></li>
            </ul>
        </nav>
    </header>

    <?php echo $content ?>
</body>
</html>
