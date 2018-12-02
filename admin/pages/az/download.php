<?php 
require_once("vendor/autoload.php"); 

/* Start to develop here. Best regards https://php-download.com/ */


// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText(
    '"Learn from yesterday, live for today, hope for tomorrow. '
    . 'The important thing is not to stop questioning." '
    . '(Albert Einstein)'
);

/*
 * Note: it's possible to customize font style of the Text element you add in three ways:
 * - inline;
 * - using named font style (new font style object will be implicitly created);
 * - using explicitly created font style object.
 */

// Adding Text element with font customized inline...
$section->addText(
    '"Hello from Ammara Enterprise" '
    . '(Azhar)',
    array('name' => 'Tahoma', 'size' => 20)
);

// Adding Text element with font customized using named font style...
$fontStyleName = 'oneUserDefinedStyle';
$phpWord->addFontStyle(
    $fontStyleName,
    array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
);
$section->addText(
    '"The greatest accomplishment is not in never falling, '
    . 'but in rising again after you fall." '
    . '(Vince Lombardi)',
    $fontStyleName
);

// Adding Text element with font customized using explicitly created font style object...
$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setBold(true);
$fontStyle->setName('Tahoma');
$fontStyle->setSize(13);
$myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
$myTextElement->setFontStyle($fontStyle);

// Saving the document as OOXML file...
//$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//$objWriter->save('helloWorld.docx');
$docx=$phpWord->addSection();

// Line
$section->addTitle('Line', 1);
$section->addShape(
    'line',
    array(
        'points'  => '1,1 500,1',
        'outline' => array(
            'color'      => '#cc00ff',
            'line'       => 'thickThin',
            'weight'     => 3,
            'startArrow' => 'oval',
            'endArrow'   => 'classic',
        ),
    )
);

// Polyline
$section->addTitle('Polyline', 1);
$section->addShape(
    'polyline',
    array(
        'points' => '1,30 20,10 55,20 75,10 100,40 115,50, 120,15 200,50',
        'outline' => array('color' => '#cc00ff', 'weight' => 3, 'line' =>'thickThin','startArrow' => 'none', 'endArrow' => 'classic'),
    )
);

/*
$section->addText('Polyline:');
$options = array('points' => '10,10 20,20 25,10 40,7 3,55',
'strokecolor' => '#ff00ff',
'strokeweight' => '2',
'position' => 'absolute',
'marginLeft' => 40,
);
$section->addShape('polyline', $options);
$section->addBreak();
*/
// Saving the document as ODF file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007',$download=true);
header("Content-Disposition: attachment; filename='File.docx'");
$objWriter->save("php://output");

// Saving the document as HTML file...
//$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
//$objWriter->save('helloWorld.html');

/* Note: we skip RTF, because it's not XML-based and requires a different example. */
/* Note: we skip PDF, because "HTML-to-PDF" approach is used to create PDF documents. */