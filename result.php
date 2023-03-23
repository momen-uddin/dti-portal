<?php 
    include ('header.php');
    require_once('PdfToText\PdfToText.phpclass');

    // Create a new instance of the PdfToText class
    $pdfToText = new PdfToText('example.pdf');
    
    // Get the extracted text from the PDF file
    $text = $pdfToText->Text;
    
    // Search for a specific pattern of text

    $string = "387902";

    if (strpos($text, $string) !== false) {
        $result = $string;
    } else {
        echo 'Text not found';
    }
    
?>

<div class="container">
    <div class="row">
        <h1>Result is</h1>
        <h3>
            <?php
                echo $result;
            ?>
        </h3>
    </div>
</div>




<?php

  include ('footer.php');

?>