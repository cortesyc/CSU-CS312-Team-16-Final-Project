<h1>Color generator</h1>

<?php
    if(isset($failView)) echo $failView;

    echo Form::open(array(
        'action' => 'index/milestone', 
        'method' => 'get'
    ));

    echo Form::label('Number of rows and columns:&nbsp;', 'rowsCols');
    echo Form::input('rowsCols', null, array(
        'type' => 'number', 
        'min' => '1', 
        'max' => '26', 
        'required' 
    ));
    echo '<br>';

    echo Form::label('Number of colors:&nbsp;', 'colors');
    echo Form::input('colors', null, array(
        'type' => 'number', 
        'min' => '1', 
        'max' => '10', 
        'required'
    ));
    echo '<br>';

    echo Form::submit();
    echo Form::close();
?>
