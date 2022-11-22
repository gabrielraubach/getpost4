<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE4</title>
    <style>
        body {
            background-color: gray;
        }

        .container {
            background-color: gray;
            width: 400px;
            height: auto;
            margin: 100px auto;
            padding: 20px;
            align-items: baseline;
        }
    </style>
</head>

<body>
    <div class="container">
        <form  method="POST">
            <h1>Exercicio nº 4 </h1>
            <p>Informe o valor de A</p>
            <input type="number" name="A" id="A">
            <p>Informe o valor de B</p>
            <input type="number" name="B" id="B">
            <p>Informe o valor de C</p>
            <input type="number" name="C" id="C"><br><br>
            <input type="submit" name="btngerar" value="calcular"> 
        </form>
        <?php
        $D = 0;
        $R1 = 0;
        $R2 = 0;
        if(isset($_POST['btngerar'])){
               
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        
            $D = sqrt(($B* $B) -4 * $A * $C);
            if($D >= 0 && $A != 0){
            $R2 = number_format((($B *-1) + $D)/(2*$A), 2, '.', '');
            $R1 = number_format((($B *-1) - $D)/(2*$A), 2, '.', '');
            
            echo"<h1> O Resultado é:".$R1. " e " .$R2."</h1>";
        }
        else{
            echo"<h1> O Resultado é: impossivel resolver a baskara </h1>";
        }

        }
       
        ?>
    </div>
    
</body>

</html>