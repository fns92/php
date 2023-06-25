<?php

include './function/class.php';
do {
    $opt = readline("Ingrese numero de ejercicio (0 para salir): ");
    switch ($opt) {
        case 1:
            ej1();
            break;
        case 2:
            ej2();
            break;
        case 3:
            ej3();
            break;
        case 4:
            ej4();
            break;
        case 5:
            ej5();
            break;
        case 0:
            echo "Fin del programa\n";
            break;
        default:
            echo "Ejercicio no identificado\n";
            break;
    }
} while ($opt != 0);


function ej1()
{
    echo "***Ejercicio 1***\n";
    $nombre = readline("Ingrese nombre de la persona: ");
    $persona = new Persona();
    $persona->setName($nombre);
    echo "Persona creada\n";
    echo '$persona->getName(): ' . $persona->getName() . "\n";
}

function ej2()
{
    echo "\n***Ejercicio 2***\n";
    $nomEmpl = readline("Ingrese nombre del empleado: ");
    $sueldo = readLine("Ingrese sueldo: ");
    $empleado = new Empleado();
    $empleado->init($nomEmpl, $sueldo);
    echo $empleado->debePagarImpuestos() . "\n";
}

function ej3()
{
    echo "\n***Ejercicio 3***\n";
    $titulo = readline("Ingrese titulo: ");
    $alineacion = readline("Ingrese alineacion: ");
    $colorFondo = readline("Ingrese color de fondo: ");
    $colorTexto = readline("Ingrese color de texto: ");
    $cabeceraPagina = new CabeceraPagina($titulo, $alineacion, $colorFondo, $colorTexto);
    $gestor = fopen("index.html", "w");
    $contenido = '<h1 style = "text-align:' . $cabeceraPagina->alineacion .
        '; background-color:' . $cabeceraPagina->colorFondo .
        '; color:' . $cabeceraPagina->colorTexto .
        '">' .
        $cabeceraPagina->titulo . '</h1>';

    fwrite($gestor, $contenido);
    fclose($gestor);
    echo "Archivo index.html generado, abra su navegador para ver los cambios\n";
}

function ej4()
{
    echo "\n***Ejercicio 4***\n";
    $nombre = readline("Ingrese nombre alumno: ");
    $nota1 = readline("Ingrese nota 1: ");
    $nota2 = readline("Ingrese nota 2: ");
    $nota3 = readline("Ingrese nota 3: ");
    $nota4 = readline("Ingrese nota 4: ");
    $alumno = new Alumno($nombre, $nota1, $nota2, $nota3, $nota4);
    echo "\nAlumno: " . $alumno->nombreAlumno . " Nota final: " . $alumno->calcularNotaFinal() . "\n";
}

function ej5()
{
    echo "\n***Ejercicio 5***\n";
    $marca = readline("Ingrese marca: ");

    do {
        $color = readline("Ingrese color: ");
    } while (strtolower($color) != 'azul' && strtolower($color) != 'negro');

    do {
        $sistema = readline("Ingrese sistema: ");
    } while (strtolower($sistema) != 'android' && strtolower($sistema) != 'ios');

    $numero = readline("Ingrese numero: ");
    $celular1 = new TelefonoCelular($marca, $color, $sistema, $numero);
    $celular2 = new TelefonoCelular("Iphone 8", "Azul", "iOS 16", "1122334455");
    echo "\n" . '***$celular1->imprimirEstado()***' . "\n";
    $celular1->imprimirEstado();
    echo "\n" . '***$celular2->imprimirEstado()***' . "\n";
    $celular2->imprimirEstado();
    echo "\n" . '***$celular1->apagarCelular()***' . "\n";
    $celular1->apagarCelular();
    echo "\n" . '***$celular1->hacerLlamada($celular2->numero)***' . "\n";
    $celular1->hacerLlamada($celular2->numero);
    echo "\n" . '***$celular1->terminarLlamada()***' . "\n";
    $celular1->terminarLlamada();
    echo "\n" . '***$celular1->encenderCelular()***' . "\n";
    $celular1->encenderCelular();
    echo "\n" . '***$celular1->terminarLlamada()***' . "\n";
    $celular1->terminarLlamada();
    echo "\n" . '***$celular1->imprimirEstado()***' . "\n";
    $celular1->imprimirEstado();
    echo "\n" . '***$celular2->hacerLlamada($celular1->numero)***' . "\n";
    $celular2->hacerLlamada($celular1->numero);
    echo "\n" . '***$celular2->imprimirEstado()***' . "\n";
    $celular2->imprimirEstado();
}
