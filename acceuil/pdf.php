<?php
require_once('../inscription.php');
 
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
 
// set document information
$pdf-&gt;SetCreator(PDF_CREATOR);
$pdf-&gt;SetAuthor('Nicola Asuni');
$pdf-&gt;SetTitle('TCPDF Example 001');
$pdf-&gt;SetSubject('TCPDF Tutorial');
$pdf-&gt;SetKeywords('TCPDF, PDF, example, test, guide');
 
// set default header data
$pdf-&gt;SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING);
 
// set header and footer fonts
$pdf-&gt;setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf-&gt;setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
// set default monospaced font
$pdf-&gt;SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
//set margins
$pdf-&gt;SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf-&gt;SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf-&gt;SetFooterMargin(PDF_MARGIN_FOOTER);
 
//set auto page breaks
$pdf-&gt;SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
//set image scale factor
$pdf-&gt;setImageScale(PDF_IMAGE_SCALE_RATIO);
 
//set some language-dependent strings
$pdf-&gt;setLanguageArray($l);
 
// ---------------------------------------------------------
 
// set default font subsetting mode
$pdf-&gt;setFontSubsetting(true);
 
// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf-&gt;SetFont('dejavusans', '', 14, '', true);
 
// Add a page
// This method has several options, check the source code documentation for more information.
$pdf-&gt;AddPage();
 
// Set some content to print
$html = &lt;&lt;&lt;EOD
&lt;h1&gt;Welcome to &lt;a href=&quot;http://www.tcpdf.org&quot; style=&quot;text-decoration:none;background-color:#CC0000;color:black;&quot;&gt;&amp;nbsp;&lt;span style=&quot;color:black;&quot;&gt;TC&lt;/span&gt;&lt;span style=&quot;color:white;&quot;&gt;PDF&lt;/span&gt;&amp;nbsp;&lt;/a&gt;!&lt;/h1&gt;
&lt;i&gt;This is the first example of TCPDF library.&lt;/i&gt;
&lt;p&gt;This text is printed using the &lt;i&gt;writeHTMLCell()&lt;/i&gt; method but you can also use: &lt;i&gt;Multicell(), writeHTML(), Write(), Cell() and Text()&lt;/i&gt;.&lt;/p&gt;
&lt;p&gt;Please check the source code documentation and other examples for further information.&lt;/p&gt;
&lt;p style=&quot;color:#CC0000;&quot;&gt;TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE &lt;a href=&quot;http://sourceforge.net/donate/index.php?group_id=128076&quot;&gt;MAKE A DONATION!&lt;/a&gt;&lt;/p&gt;
EOD;
 
// Print text using writeHTMLCell()
$pdf-&gt;writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
 
// ---------------------------------------------------------
 
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf-&gt;Output('example_001.pdf', 'I');
?>;