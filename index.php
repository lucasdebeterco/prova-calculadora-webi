<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova Calculadora</title>
    <style>
        select {
            border: none;
            appearance: none;
            overflow-y: auto;
            outline: 0;
        }

        select option {
            padding: 10px 20px;
            margin-left: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            float: left;
        }
    </style>
</head>

<body>
    <form name="calc" action="#" method="post">
        <div class="conteudo" style="display: flex; flex-direction: column; width: 210px; height: 250px; justify-content: space-between">
            <h3>Calculadora PHP</h3>
            <input type="text" name="num1" placeholder="Digite o primeiro valor..">
            <select name="func" size="2">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
            </select>
            <input type="text" name="num2" placeholder="Digite o segundo valor..">
            <input type="submit" name="enviar" value="=">
        </div>
    </form>

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['func'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $func = $_POST['func'];

        echo "<b>Solução</b>:";
        if ($func == 'add') {
            $num3 = $num1 + $num2;
            echo "$num1 + $num2 = $num3";
        } else if ($func == 'sub') {
            $num3 = $num1 - $num2;
            echo "$num1 - $num2 = $num3";
        } else if ($func == 'mul') {

            $num3 = $num1 * $num2;
            echo "$num1 * $num2 = $num3";
        } else if ($func == 'div') {

            $num3 = $num1 / $num2;
            echo "$num1 / $num2 = $num3";
        }
    } else {
        echo "Por favor, digite todos os valores..";
    }
    ?>
</body>

</html>