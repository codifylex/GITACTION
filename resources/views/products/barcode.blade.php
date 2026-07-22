<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">

<title>
Código de Barras - {{ $product->name }}
</title>


<style>

body {

    font-family: Arial;
    text-align:center;

}


.label {

    width: 300px;
    margin:auto;
    border:1px solid #ddd;
    padding:20px;

}


.barcode {

    width:250px;

}


.name {

    font-size:16px;
    font-weight:bold;
    margin-bottom:10px;

}


.code {

    font-size:14px;
    letter-spacing:2px;

}


</style>


</head>


<body>


<div class="label">


<div class="name">

{{ $product->name }}

</div>


<img 
src="data:image/png;base64,{{ $barcode }}"
class="barcode"
>


<div class="code">

{{ $product->barcode }}

</div>


</div>


<script>

window.print();

</script>


</body>

</html>