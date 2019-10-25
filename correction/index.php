<?php
//print_r($_SERVER);
//die();
require_once "config.php";
require_once "kernel/ToolBox.php";
require_once "controllers/AuthController.php";
if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Récupération des datas du formulaire

    $datas = ToolBox::extract_datas_form($_POST,['login','password']);
    // Identification
    $auth = new AuthController();
    $messages= [];
    try{
        $auth->login($datas,'list.php');
    } catch (Exception $e) {
        $messages[] = ['type'=>'danger','message'=>$e->getMessage()] ;
        ToolBox::setFlash($messages);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <?php ToolBox::getFlash(); ?>
                <form action="" method="post">
                <div class="form-group">
                    <label for="login">Votre login <span style="color:red">*</span></label>
                    <input type="text" class="form-control" name="login">
                </div>
                <div class="form-group">
                    <label for="password">Votre password <span style="color:red">*</span></label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-primary" value="se connecter">
                </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>