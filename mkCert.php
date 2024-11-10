<?php
require __DIR__ . '/vendor/autoload.php';

use Mpdf\Mpdf;

// Constants for database connection
const HOST = '192.168.1.2';
const USER = 'root';
const PASSWORD = 'casaos';
const DATABASE = 'certificados';

const PDF_SOURCE_FILE = 'certificado.pdf';
const PDF_SOURCE_DIRECTORY = 'resources/';
const PDF_OUTPUT_DIRECTORY = 'results/';

const PDF_SIGNATURE_FILE = PDF_SOURCE_DIRECTORY . '/assinatura.png';

// Connect to database
$conn = new mysqli(
    HOST, 
    USER,
    PASSWORD,
    DATABASE
);

// Execute query
$result = $conn->query('SELECT nome FROM certificados.participantes ORDER BY nome ASC LIMIT 5');
$nomes  = $result->fetch_all();

// Create each certificate
echo "\n\n";
foreach ($nomes as $nome) {
    // New mPDF object
    $pdf = new mPDF(['format' => 'LETTER', 'orientation' => 'L']);
    // Get certificate template 
    $pdf->SetSourceFile('./' . PDF_SOURCE_DIRECTORY . PDF_SOURCE_FILE);
    
    // Start first page
    $tplId = $pdf->ImportPage(1);
    $pdf->UseTemplate($tplId); // Use the template
    $pdf->setdisplaymode('fullpage'); // Use full page
    
    // Set font style
    $pdf->SetFont('Arial', 'I', 36);

    // Put the name of participant on the certificate
    $pdf->WriteCell(250, 120, $nome[0], 0, 0, 'C');
    
    // Put the signature of university director on the certificate
    $pdf->WriteFixedPosHTML("<img src='./" . PDF_SIGNATURE_FILE . "'>", 90, 145, 100, 80);
  
    // Write the new PDF file.
    $pdf->Output('./' . PDF_OUTPUT_DIRECTORY . $nome[0] . '.pdf');
  
    // just puts a dot on the screen. (to show that it is working and not frozen)
    echo ".";
}

echo "\n\n";