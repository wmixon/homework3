<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Dynamic Forms</title>
        <style>
            @import url("css/styles.css");
            body{
                background-image: url("<?=$_GET['img']?>");
            }
        </style>
    </head>
    <?php
    echo '<body style="Color:'. $_GET['Color'] . '; text-align:' . $_GET['align'] .'">';
    ?>
        <fieldset>		
        <legend>Dynamic Forms</legend>		
        <form>
        	<label>Text Alignment<input type="text" name="align"></label>
            <input type="reset">
            <br><br>
            
            <label for="fname">First Name:</label> <input type="text" name="fnamee" id="fname" >
            <label for="lname">Last Name:</label><input type="text" name ="lnamee" id="lname" >
            <br><br>
            
            <label>Text Color</label>
            <input type="radio" name="Color" value="">Black
            <input type="radio" name="Color" value="red">Red
            <input type="radio" name="Color" value="blue">Blue
            <input type="radio" name="Color" value="green">Green
            <input type="radio" name="Color" value="yellow">Yellow
            <input type="radio" name="Color" value="brown">Brown
            <input type="radio" name="Color" value="purple">Purple
            <input type="radio" name="Color" value="orange">Orange
            <input type="radio" name="Color" value="white">White
            <br><br>
            
            <?php if($_GET['img'] == './img/red.png'){ 
            echo "Congratulations you selected a red background!<br><br>";
            }
            ?>
            
            <label> Background Color</label>
            <select name="img">
                <option value="">Select One</option>
                <option value="black">Black</option>
                <option value="./img/red.png">Red</option>
                <option value="./img/blue.png">Blue</option>
                <option value="./img/green.png">Green</option>
                <option value="./img/yellow.png">Yellow</option>
                <option value="./img/brown.png">Brown</option>
                <option value="./img/purple.png">Purple</option>
                <option value="./img/orange.png">Orange</option>
                <option value="">White</option>
            </select>
            <br><br>
            
            <label> <input type="checkbox" name="sname"> :Show Name</label>
            <br><br>
            
            <input  type="submit"  value="Submit">
            <br><br>

        </form>
        </fieldset>
        <?php
            if($_GET['sname'] == 'on'){
                echo "<br><br>";
                echo "<div class='centeredBox'>" . $_GET['fnamee'] . " " . $_GET['lnamee'] . "</div>";
            }
        ?>
    
    <div id="footer">
        <footer>&copy; Mixon 2017. <br/> Disclaimer: The information on this page might not be accurate. It's used for academic purposes. <br/>
        <img src="./img/csumb-logo.png" alt="CSUMB Logo" />
        </footer>
    </div>
    </body>
</html>