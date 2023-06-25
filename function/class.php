<?php
/* Ej 1 */
class Persona
{

    public $nombre;
    public $apellido;
    public $edad;

    public function setName($nombre)
    {
        $this->nombre = strtolower($nombre);
    }

    public function getName()
    {
        return ucfirst($this->nombre);
    }
}
//////////////////////////////////////////////

/* Ej 2 */
class Empleado
{

    public $nombre;
    public $sueldo;
    private $pagaImpuestos;

    public function init($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function debePagarImpuestos()
    {
        if ($this->sueldo > 45000) {
            $this->pagaImpuestos = "Si";
        } else {
            $this->pagaImpuestos = "No";
        }
        return 'Nombre: ' . $this->nombre . ' Paga impuestos: ' . $this->pagaImpuestos;
    }
}
/////////////////////////////////////////////////////////////////////////////////

/* Ej 3. */
class CabeceraPagina
{
    public $titulo;
    public $alineacion;
    public $colorFondo;
    public $colorTexto;

    public function __construct(
        $titulo = '',
        $alineacion = 'center',
        $colorFondo = 'white',
        $colorTexto = 'black'
    ) {
        $this->titulo = $titulo;
        $this->alineacion = $alineacion;
        $this->colorFondo = $colorFondo;
        $this->colorTexto = $colorTexto;
    }
}
///////////////////////////////////////////////////////////////

/* Ej. 4*/
class Alumno
{
    public $nombreAlumno;
    public $nota1;
    public $nota2;
    public $nota3;
    public $nota4;
    private $porcentajeNotas = array(0.15, 0.20, 0.25, 0.40);
    private $notaFinal;

    public function __construct(
        $nombreAlumno,
        $nota1,
        $nota2,
        $nota3,
        $nota4
    ) {
        $this->nombreAlumno = $nombreAlumno;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->nota4 = $nota4;
    }

    public function calcularNotaFinal()
    {
        $suma = 0;
        $suma += $this->nota1 * $this->porcentajeNotas[0] +
            $this->nota2 * $this->porcentajeNotas[1] +
            $this->nota3 * $this->porcentajeNotas[2] +
            $this->nota4 * $this->porcentajeNotas[3];

        $this->notaFinal = $suma;
        return $this->notaFinal;
    }
}
/* Ej. 5 */
class TelefonoCelular
{
    public $marca;
    public $color;
    public $sistema;
    public $numero;
    private $numeroLlamado;
    private $estado;
    private $haciendoLlamada;

    public function __construct($marca, $color, $sistema, $numero)
    {
        $this->marca = $marca;
        $this->color = $color;
        $this->sistema = $sistema;
        $this->numero = $numero;
        $this->numeroLlamado = '';
        $this->estado = 'Encendido';
        $this->haciendoLlamada = 'No';
    }

    public function hacerLlamada($numeroLlamado)
    {
        if ($this->estado != 'Apagado') {
            $this->numeroLlamado = $numeroLlamado;
            $this->haciendoLlamada = 'Si';
            echo "Llamada en curso\n";
        } else {
            echo "Encienda el teléfono para operar\n";
        }
    }

    public function terminarLlamada()
    {
        if ($this->haciendoLlamada == 'Si') {
            $this->numeroLlamado = '';
            $this->haciendoLlamada = 'No';
            echo "Llamada finalizada\n";
        } else {
            echo "No hay llamadas en curso\n";
        }
    }


    public function apagarCelular()
    {
        if ($this->estado != 'Apagado') {
            $this->numeroLlamado = '';
            $this->haciendoLlamada = 'No';
            $this->estado = 'Apagado';
            echo "Celular apagado\n";
        } else {
            echo "Celular ya apagado\n";
        }
    }

    public function encenderCelular()
    {
        if ($this->estado == 'Apagado') {
            $this->numeroLlamado = '';
            $this->haciendoLlamada = 'No';
            $this->estado = 'Encendido';
            echo "Celular encendido\n";
        } else {
            echo "Celular ya encendido\n";
        }
    }

    public function imprimirEstado()
    {
        echo "Marca: " . $this->marca . "\n";
        echo "Color: " . $this->color . "\n";
        echo "Sistema: " . $this->sistema . "\n";
        echo "Numero: " . $this->numero . "\n";
        echo "Numero Llamado: " . $this->numeroLlamado . "\n";
        echo "Haciendo Llamada: " . $this->haciendoLlamada . "\n";
        echo "Estado: " . $this->estado . "\n";
        echo "\n";
    }
}
