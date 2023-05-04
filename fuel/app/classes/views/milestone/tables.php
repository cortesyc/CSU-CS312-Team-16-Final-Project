<table id = "hello" class="table1">
    <?php
        $colors = array();  
        foreach($colorInfo as $info) {
            $id = $info['id'];
            $name = $info['name'];
            $hexVal = $info['hex_value'];
            array_push($colors, $name);
        }

        for($i = 0; $i < $numColors; $i++) {
            $optionString = '';
            for($k = 0; $k < $colorCount; $k++) {
                if($k == $i) {
                    $optionString.="<option value=".$colors[$k]." selected>".$colors[$k]."</option>"; 
                }
                else {
                    $optionString.="<option value=".$colors[$k].">".$colors[$k]."</option>";
                }
            }
            $inputTag = '';
            if($i == 0) {
                $inputTag = '<input type="radio" 
                id="'.$i.'-button" name="radio-colors" value="'.$i.'" checked/>';
            }
            else {
                $inputTag = '<input type="radio" 
                id="'.$i.'-button" name="radio-colors" value="'.$i.'" />';
            }

            echo '<tr>
            <td class="radio-colors">
            '.$inputTag.'
            <label for="'.$i.'-button">
            </td>
            <td class="left-col">
            <select class="colors" id="'.$i.'">'.$optionString.'
            </select>
            </td>
            <td class="right-col"></td>
            </tr></label>';

        }
        echo '<p id="improper-color">Sorry, You can not have repeated colors.</p>';
    ?>
</table>

<table class="table2">
    <tr>
        <td></td>
        <?php   //Making the Columns
            $alphabet = 'A';
            for($i = 0; $i < $numRowsCols; $i++) {
                echo "<td>$alphabet</td>";
                $alphabet++;
            }
        ?>
    </tr>
    <?php   //Making the rows
        for($i = 1; $i < $numRowsCols+1; $i++) {  
            $cells = '';
            for($k = 0; $k < $numRowsCols; $k++) {
                $letter = ord('A') + $k;
                $cells.='<td id="'.chr($letter).''.$i.'"></td>';
            } 
            echo '<tr>
                    <td>'.$i.'</td>'
                    .$cells.'
                </tr>';
        }
    ?>
</table>

<form class="db" method="post">
    <label for="color-add">Name of color to add:</label>
    <input type="text" placeholder="Color to add" name="color-add"></input>
    <label for="color-add-hex">Hex value of color to add:</label>
    <input type="text" placeholder="Color hex value" name="color-add-hex"></input>
    <input type="submit" value="Add color" name="add"><br> 

    <label for="color-edit">Name of color to edit:</label>
    <input type="text" placeholder="Color to edit" name="color-edit"></input>
    <input type="submit" value="Edit color" name="edit"><br> 

    <label for="color-delete">Name of color to delete:</label>
    <input type="text" placeholder="Color to delete" name="color-delete"></input>
    <input type="submit" value="Delete color" name="delete"><br> 
</form>

<?php 
echo "Number of Rows and Columns: $numRowsCols";
echo "<br>"; 
echo "Number of Colors: $numColors"; 
?>
<br />
<button class="add">Print View</button>
<!--------------------------------------------------------------------->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> 
<script type="text/javascript">
	const button = document.querySelector('button');
	button.addEventListener('click', () => {
		const element = document.querySelector('.demo'); //whole document
		element.style.width = '8.5in';
		element.style.height = '11in';
		element.style.filter = 'grayscale(1)';
		element.style.position = 'relative';
		const navigation = document.querySelector('nav'); //removing navigation
		navigation.style.visibility = 'hidden';
		const body = document.querySelector('.table1');
		body.style.width = '8.5in';
        createTextBoxes();
		const btn = document.querySelector('.add');
		btn.style.visibility = 'hidden';
	        const database = document.querySelector('.db');
        	database.style.visibility = 'hidden';
	});

    $('#improper-color').hide();

    (function () {
    var previous;

    $(".table1").on('click', function () {
        previous = $(this).find('option:selected');
    }).change(function() {

        var changed = $(this).find('option:selected');
        
        for($i = 0; $i < changed.length; $i++) {
            for($k = $i+1; $k < changed.length; $k++) {
                if(changed[$i].value == changed[$k].value) {
                    console.log("error");
                    returnToOldList(changed, previous);
                    $("#improper-color").fadeIn().delay(1500).fadeOut();
                    return;
                }
            }
        }
    });
})();

    function returnToOldList($new, $old) {
        console.log("made it");
        for($i = 0; $i < $new.length; $i++) {
            if($new[$i].value != $old[$i].value) {
                $("#"+$i).val($old[$i].value);
                return;
            }
        }
    }

    function createTextBoxes() {
        var rows = $('.table1 tr').length;
        for(var i = 0; i < rows; i++) {
            var row = document.getElementById(i);
            var temp = row.value;
            row.replaceWith(temp);
            var button = document.getElementById(i+'-button');
            button.style.visibility = 'hidden';
        }
    }
</script>
