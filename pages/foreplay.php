<!DOCTYPE html>
<html>
<head>
    <title>Decodifica poli-alfabetica</title>

    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">

    <!--PHP-->
    <?php
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
                    <p>Questo pagina permette di Decifrare parole</p>
                    <p>verrà chiesto di inserire prima il numero di chiavi poi lo sfasamento delle chiavi e la parola da decrifrare</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <form action="./decrypt.php" method="POST">
                    <label class="inputLabel" for="key">Scegli il numero di chiavi (da 1 a 4):</label><br>
                        <input type="number" id="key" name="key" min='1' max='4'><br><br>

                        <input class="buttonC" type="submit" value="Confirm">
                    </form>
                </td> 
            </tr>

            <?php
                
            ?>
        </tbody>
    </table>

        <center>
            <img class="image" src="../images/amogus.png" alt="shhh">
        </center>
    
    

</body>
</html>