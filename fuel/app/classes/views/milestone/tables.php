
<table class="table1">
    <?php
        for($i = 0; $i < $numColors; $i++) {
            echo '<tr>
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
            </tr>';
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
