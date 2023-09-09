<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $xsd = $_POST['xsd'];

    $cliente = new SoapClient(null, array(
        'location' => "https://servicios.documentosige.com.co/service.php?wsdl",
        'uri' => "https://servicios.documentosige.com.co/service.php?wsdl"
    ));

    $hello = $cliente->__soapCall("hello", array($xsd));

    echo $hello;
}
?>
