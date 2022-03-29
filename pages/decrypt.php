<!DOCTYPE html>
<html>
<head>
    <title>Decodifica poli-alfabetica</title>

    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">

    <!--PHP-->
    <?php
        //session_start();
        include "../php/secretHandler.php";
    ?>

    <!--FONT LINK-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@200&display=swap" rel="stylesheet">

</head>
<body>

    <a class="buttonH" href="../index.php">HOME</a>

    <table>
        <thead>
            <tr>
               <th colspan="2">
                    <h1 class="title">Decodifica poli-alfabetica</h1>
               </th> 
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="2">
                    <p>Secondo passo inserire lo sfasamento delle chiavi e infine la parola</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <form action="./decrypt.php" method="POST">
                        <?php
                            if(isset($_POST["key"])){
                                for($i = 0; $i < $_POST["key"]; $i++){
                                    echo '<label class="inputLabel" for="key"> C'. $i+1 .'(da 1 a 26): </label>';
                                    echo '<input type="number" id="D' . $i+1 . '" name="D' . $i+1 . '" min="1" max="26"><br>';
                                }

                                echo '<br><label class="inputLabel" for="key">Parola da Cripatare:</label><br>';
                                echo '<input type="text" id="word" name="word"><br>';

                                //hidden value
                                echo "<input type='hidden' value = '". $_POST["key"] . "'name ='key'>";

                            }
                        ?>
                        <input class="buttonC fill" type="submit" value="Let's Start">

                    </form>
                </td> 
            </tr>
            <tr>
                <td>
                    <p>RISULTATO-></p>
                    <?php
                        
                        if(isset($_POST["word"]) && isset($_POST["key"])){
                            $result = "";

                            for($i = 0; $i < $_POST["key"]; $i++){
                                $index = "D". $i+1;
                                if(isset($_POST[$index])){
                                    $_SESSION[$index] = $_POST[$index];
                                }
                            }

                            //risultato
                            $result = decrypt($_POST["word"], $_POST["key"]);

                            echo "<p class='result'>".$result."</p>";
                        }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

        <center>
            <img class="image" src="../images/amogus.png" alt="shhh">
        </center>
    
    

</body>
</html>