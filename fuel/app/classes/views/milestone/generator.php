<h1>Color generator</h1>

<?php
    if(isset($failView)) echo $failView;

    echo Form::open(array(
        'action' => 'index/milestone', 
        'method' => 'get'
    ));

    echo Form::label('Number of rows and columns:&nbsp;', 'rowsCols', array("class" => "label"));
    echo Form::input('rowsCols', null, array(
        'type' => 'number', 
        'min' => '1', 
        'max' => '26', 
        'required' 
    ));
    echo '<br>';

    echo Form::label("Number of colors (up to $colorCount):&nbsp;", 'colors', array("class" => "label"));
    echo Form::input('colors', null, array(
        'type' => 'number', 
        'min' => '1', 
        'max' => $colorCount,   
        'required'
    ));
    echo '<br>';

    echo Form::submit("submit button", "Submit", array("class" => "button"));
    echo Form::close();
?>

<form class="db" method="post">
    <h2>Add color</h2>
    <label for="color-add"><strong>Name of color to add:</strong></label><br>
    <input type="text" placeholder="Color to add" name="color-add"></input><br> 
    <label for="color-add-hex"><strong>Hex value of color to add:</strong></label><br>
    <input type="text" placeholder="Color hex value" name="color-add-hex"></input><br>
    <input type="submit" value="Add color" name="add"><br> 

    <h2>Delete color</h2>
    <label for="color-delete"><strong>Name of color to delete:</strong></label><br>
    <input type="text" placeholder="Color to delete" name="color-delete"></input><br>
    <input type="submit" value="Delete color" name="delete"><br> 
</form>
