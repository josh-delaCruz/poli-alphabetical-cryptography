<!DOCTYPE html>
<html>
<head>
    <title>Crittografia poli-alfabetica</title>

    <!--CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--PHP-->
    <?php
        include "./php/secretHandler.php";
    ?>

    <!--FONT LINK-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@200&display=swap" rel="stylesheet">

</head>
<body>

    <table>
        <thead>
            <tr>
               <th colspan="2">
                    <h1 class="title">Crittografia poli-alfabetica</h1>
               </th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2">
                    <p>Questo pagina permette di Cripatare parole</p>
                    <p>verrà richiesto di inserire prima il numero di chiavi poi lo sfasamento delle chiavi e la parola</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <form action="./pages/crypt.php" method="POST">
                    <label class="inputLabel" for="key">Scegli il numero di chiavi (da 1 a 4):</label><br>
                        <input type="number" id="key" name="key" min='1' max='4'><br><br>

                        <input class="buttonC fill" type="submit" value="Confirm">
                    </form>
                </td> 
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <a class="buttonE" href="./pages/foreplay.php">Decifra la parola</a> 
                </td>
            </tr>
        </tfoot>
    </table>

        <center>
            <img class="image" src="./images/amogus.png" alt="shhh">
        </center>
    
    

</body>
</html>