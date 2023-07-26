<?php

include_once 'Modelo/clsReportes.php';
include_once 'LibreriaFPDF/fpdf.php';

class controladorreporte
{
	private $vista;
	
   
    public function buscarcliente()
	{	
	
		$fcorreo=new clsReportes();
        if(!empty($_POST))
		{
            //recibo la caja de texto del formulario html
            $correo=$_POST['correo'];
           
            // Crear el objeto FPDF
		    $pdf = new FPDF();
		
		    // Agregar una página
		    $pdf->AddPage();

		
		    // Establecer la fuente y el tamaño del título
		    $pdf->SetFont('Arial', 'B', 14);
		    $pdf->Cell(0, 10,utf8_decode('Reporte,contactos del cliente mediante el correo'), 0, 1, 'C');

		    // Consulta a la base de datos
            
            $Consulta=$fcorreo-> reportecliente($correo);	    
		    //Centrar la tabla
            $pdf->SetLeftMargin(10);
            if ($Consulta->num_rows > 0) {
        
                // Establecer la fuente y el tamaño del encabezado de la tabla
                $pdf->SetFont('Arial', 'B', 9);

                // Imprimir los encabezados de la tabla
                $pdf->Cell(20, 10, 'Iduser', 1, 0, 'C');
                $pdf->Cell(30, 10, 'Nombre', 1, 0, 'C');
                $pdf->Cell(30, 10, 'APaterno', 1, 0, 'C');
                $pdf->Cell(30, 10, 'AMaterno', 1, 0, 'C');
                $pdf->Cell(40, 10, 'Correo', 1, 0, 'C');
                $pdf->Cell(30, 10, 'Telefono', 1, 1, 'C');

            
                // Establecer la fuente y el tamaño del contenido de la tabla
                $pdf->SetFont('Arial', '', 8);

                // Imprimir los datos de la tabla
                while ($row = $Consulta->fetch_assoc()) {
                    $pdf->Cell(20, 10, $row["usuario_id"], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row["nombre"], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row["apaterno"], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row["amaterno"], 1, 0, 'C');
                    $pdf->Cell(40, 10, $row["email"], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row["telefono"], 1, 1, 'C');


                   
                }

                // Salto de línea después de la tabla
                $pdf->Ln(10);

                $fcorreo->conectar->close();
                // Mostrar el PDF
                $pdf->Output();
            } else {
                echo "No se encontraron registros.";
            }

            $fcorreo->conectar->close();
            //******************	
            
           
        }else
        {
            $vista="Vistas/Acceso/Administracion/frmReportes.php";
			include_once("Vistas/Inicio/frmplantillaadmi.php");
        }

    }

}
?>