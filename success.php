<?php

if (isset($_GET)) {
    if (isset($_GET['payment_type'])) {
        $pay_method = $_GET['payment_type'];
    } else {
        $pay_method = "";
    }

    if (isset($_GET['external_reference'])) {
        $pay_eref = $_GET['external_reference'];
    } else {
        $pay_eref = "";
    }

    if (isset($_GET['collection_id'])) {
        $pay_id = $_GET['collection_id'];
    } else {
        $pay_id = "";
    }
} else {
    $pay_method = "";
    $pay_eref = "";
    $pay_id = "";
}


?>
<html lang="es">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Success Confirmation Popup</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    font-family: 'Varela Round', sans-serif;
}
.modal-confirm {        
    color: #636363;
    width: 325px;
    font-size: 14px;
}
.modal-confirm .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
}
.modal-confirm .modal-header {
    border-bottom: none;   
    position: relative;
}
.modal-confirm h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
    min-height: 40px;
    border-radius: 3px; 
}
.modal-confirm .close {
    position: absolute;
    top: -5px;
    right: -5px;
}   
.modal-confirm .modal-footer {
    border: none;
    text-align: center;
    border-radius: 5px;
    font-size: 13px;
}   
.modal-confirm .icon-box {
    color: #fff;        
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -70px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #82ce34;
    padding: 15px;
    text-align: center;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
    font-size: 58px;
    position: relative;
    top: 3px;
}
.modal-confirm.modal-dialog {
    margin-top: 80px;
}
.modal-confirm .btn {
    color: #fff;
    border-radius: 4px;
    background: #82ce34;
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
    background: #6fb32b;
    outline: none;
}
.trigger-btn {
    display: inline-block;
    margin: 100px auto;
}
</style>
</head>
<body>


    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons"></i>
                </div>              
                <h4 class="modal-title w-100">Genial!</h4> 
            </div>
            <div class="modal-body">
                <p class="text-center">Tu compra fue realizada exitosamente.</p>
                <hr>
                <p class="text-center">Método de pago: <?php echo $pay_method; ?></p>
                <p class="text-center">Referencia externa: <?php echo $pay_eref; ?></p>
                <p class="text-center">ID de pago: <?php echo $pay_id; ?></p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success btn-block" href="<?php echo '../index.php'; ?>">Regresar a la tienda</a>
            </div>
        </div>
    </div>

<script src="https://www.mercadopago.com/v2/security.js" view=""></script>
</body>
</html>