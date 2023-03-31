<table id = "hello" class="table1">
    <?php
        for($i = 0; $i < $numColors; $i++) {
            $colors = array(
                "red",
                "orange",
                "yellow",
                "green",
                "blue",
                "purple",
                "grey",
                "brown",
                "black",
                "teal"
            );
            $optionString = '';
            for($k = 0; $k < 10; $k++) {
                if($k == $i) {
                    $optionString.="<option value=".$colors[$k]." selected>".$colors[$k]."</option>"; 
                }
                else {
                    $optionString.="<option value=".$colors[$k].">".$colors[$k]."</option>";
                }
            }

            echo '<tr>
            <td class="left-col">
            <select name="colors" id="colors">'.$optionString.'
            </select>
            </td>
            <td class="right-col"></td>
            </tr>';

            /*echo '<tr>
            <td class="left-col">
            <select name="colors" id="colors">
                <option value="red">Red</option>
                <option value="orange">Orange</option>
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <option value="purple">Purple</option>
                <option value="grey">Grey</option>
                <option value="brown">Brown</option>
                <option value="black">Black</option>
                <option value="teal">Teal</option>
            </select>
            </td>
            <td class="right-col"></td>
            </tr>';*/
        }
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
            echo "<tr>
                    <td>$i</td>
                </tr>";
        }
    ?>
</table>

<?php 
echo "Number of Rows and Columns: $numRowsCols";
echo "<br>"; 
echo "Number of Colors: $numColors"; 
?>
<br />
<button class="add">Print View</button>
<!--------------------------------------------------------------------->

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
		const btn = document.querySelector('.add');
		btn.style.visibility = 'hidden';
	});
</script>
