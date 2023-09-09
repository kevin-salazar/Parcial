<!DOCTYPE html>
<html>
<head>
    <title>Calculadora </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Consumiendo</h5>
                <div class="btn-group" role="group" aria-label="consumiendo">
                <input type="text" class="form-control mb-2" id="xsd" placeholder="nombre">
                    <button class="btn btn-primary" onclick="hello()">consumir</button>
</div>
<div id="hello" ></div>
<script>
        function consumir(operacion) {

            var xsd = $('#xsd').val();

            $.ajax({
                type: "POST",
                url: "cliente.php", 
                data: {
                    xsd: xsd,
                    
                },
                success: function(result) {
                    $('#hello').html(result);
                }
            });
        }

        function hello() {
            consumir();
        }

    </script>

</head>
<body>