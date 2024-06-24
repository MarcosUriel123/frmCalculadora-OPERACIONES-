<?php
    function calcular($val1, $val2, $op)
    {   
        if (!is_numeric ($val1) || !is_numeric ($val2)) /*Verifica si los valores son numericos*/
        {
            return "Datos nulos o incorrectos, verifique correctamente";         
        } 
        $x = 0;

        if ($op === "sumar") 
        {
            $x = $val1 + $val2;
        } 
        else if ($op === "restar") 
        {
            $x = $val1 - $val2;
        } 
        else if ($op === "multiplicar")
        {
            $x = $val1 * $val2;
        } 
        else if 
        ($op === "dividir") 
        {
            if ($val2 != 0) 
            {
                $x = $val1 / $val2;
            } 
            else 
            {
                return "error, no se puede dividir por cero";
            }
        } 
        else 
        {
            return "Operación no válida";
        }

        return $x;
    }

    if (isset($_POST['calcular'])) 
    {
        $val1 = $_POST['v1'];
        $val2 = $_POST['v2'];
        $op = $_POST['operaciones'];
        $resultado = calcular($val1, $val2, $op);
        echo "<div id='op'>La operacion elegida fue: $op</div>";
        echo "<div id='res'>El resultado de la operacion es: $resultado</div>";
    }

?>