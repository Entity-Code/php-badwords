<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: purple;
            color: white;
            overflow: hidden;
        }
        div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }   
    </style>
</head>
<body>
    <div>
        



    <h2>(inserisci la badword nell'url)</h2>

    (prima)
    <h1>          
        <?php 
            //Creazione badword
            $badword = $_GET ['badword']; 

            //frase principale (con la prima parola presa dal GET, quindi inserita dall'utente)                     
            $var = $badword." world";
            //var_dump($var); dd();
           
            //variabile contenente la lunghezza di $var
            $varLen1 = strlen($var);

            //stampiamo tramite concatenazione $var(badword World).$eVar(length)

            echo $var." (".$varLen1.")";
        ?> 
    </h1>
    (dopo)
    <h1>    
        <?php 
            //sostituzione della badword
            $eVar = str_replace($badword, "***", $var);
            //variabile contenente la lunghezza di $eVar
            $varLen2 = strlen($eVar);
            echo $eVar." (".$varLen2.")";
        ?>   
    </h1>





    </div>
    





    

</body>
</html>


