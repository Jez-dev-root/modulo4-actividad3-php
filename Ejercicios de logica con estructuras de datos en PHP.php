<?php
// Funciones
// 1. Lista Invertida
function listaInvertida($array) { // Declara la funcion que recibe el arreglo desde la Lista Invertida porque la vista la llama para invertir los datos
    return array_reverse($array); // Devuelve el arreglo invertido mediante array_reverse porque la lista 1 debe mostrar el contenido al reves
} // Cierra la funcion utilizada en la Lista Invertida para entregar el resultado al render

// 2. Suma de Números Pares
function sumaPares($array) { // Declara la funcion que recibe el arreglo desde la Suma de Numeros Pares porque la vista solicita la suma filtrada
    $suma = 0; // Inicializa el acumulador porque se necesita partir desde cero antes de sumar pares
    foreach ($array as $num) { // Recorre cada elemento que llega desde la lista 2 porque se debe evaluar uno por uno
        if ($num % 2 === 0) { // Verifica si el numero es par porque solo esos valores aportan a la suma mostrada en la lista
            $suma += $num; // Agrega el numero par al acumulador porque la lista requiere la suma total de pares
        }
    }
    return $suma; // Devuelve la suma de pares porque la lista 2 imprime este valor
} // Cierra la funcion llamada en la lista hace una Suma de Numeros Pares para entregar el total

// 3. Frecuencia de Caracteres
function frecuenciaCaracteres($cadena) { // Declara la funcion que recibe la cadena desde la lista Frecuencia de Caracteres porque la vista necesita contar repeticiones
    $frecuencia = []; // Crea el arreglo asociativo vacio porque se debe almacenar la cuenta por caracter
    $chars = str_split($cadena); // Separa la cadena en caracteres individuales porque el conteo se hace letra por letra para la lista 3

    foreach ($chars as $char) { // Itera cada caracter recibido porque se debe revisar su presencia en el arreglo de frecuencias
        if (!isset($frecuencia[$char])) { // Verifica si el caracter aun no esta registrado porque se necesita iniciar la cuenta en uno
            $frecuencia[$char] = 1; // Registra el caracter con valor inicial uno porque acaba de aparecer y sera mostrado en la lista
        } else {
            $frecuencia[$char]++; // Incrementa la cuenta porque el caracter ya estaba registrado y la lista debe mostrar la frecuencia acumulada
        }
    }
    return $frecuencia; // Devuelve el arreglo de frecuencias porque la lista 3 imprime esta estructura
} // Cierra la funcion usada en la lista Frecuencia de Caracteres para exponer el conteo

// 4. Pirámide de Asteriscos
function imprimirPiramide($filas) { // Declara la funcion que recibe la altura desde la lista Piramide de Asteriscos porque la vista necesita el dibujo completo
    $resultado = ""; // Inicializa el buffer de salida porque se debe ir concatenando cada fila antes de mostrarla en la lista 4
    for ($i = 1; $i <= $filas; $i++) { // Controla cada fila requerida porque la lista 4 representa una piramide con ese numero de niveles
        for ($j = 1; $j <= $filas - $i; $j++) { // Agrega espacios al inicio porque la lista necesita centrar la piramide al construir cada fila
            $resultado .= " "; // Concatena un espacio porque el alineado izquierdo prepara la posicion de los asteriscos en la lista
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) { // Define cuantos asteriscos van en la fila porque el patron de la piramide crece en numeros impares
            $resultado .= "*"; // Concatena un asterisco porque cada columna visible en la lista se forma con este caracter
        }
        $resultado .= "\n"; // Inserta un salto de linea porque la lista necesita separar visualmente cada fila de la piramide
    }
    return $resultado; // Devuelve el dibujo completo porque la lista 4 imprime la piramide generada
} // Cierra la funcion usada en la lista Piramide de Asteriscos para entregar el patron final

// Datos de ejemplo
$nums = [1, 2, 3, 4, 5, 6];
$texto = "homestuck";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
    <style>
        body {
            background-color: #4B0082; /* Me gusta lo simple del diseno */
            color: white;
            font-family: "Courier New", monospace;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #FFD700;
            text-shadow: 2px 2px #000;
        }
        .card {
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid #888;
            border-radius: 8px;
            padding: 15px;
            margin: 20px auto;
            width: 60%;
            box-shadow: 0 0 10px #000;
        }
        pre {
            background: rgba(0,0,0,0.7);
            padding: 10px;
            border-radius: 6px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
<h1>Ejercicios PHP - Ejercicio 3 ?</h1>

    <div class="card">
        <h2>1. Lista Invertida</h2>
        <pre><?php print_r(listaInvertida($nums)); ?></pre>
    </div>

    <div class="card">
        <h2>2. Suma de Numeros Pares</h2>
        <pre><?php echo sumaPares($nums); ?></pre>
    </div>

    <div class="card">
        <h2>3. Frecuencia de Caracteres</h2>
        <pre><?php print_r(frecuenciaCaracteres($texto)); ?></pre>
    </div>

    <div class="card">
        <h2>4. Piramide de Asteriscos</h2>
        <pre><?php echo imprimirPiramide(6); ?></pre>
    </div>
</body>
</html>
