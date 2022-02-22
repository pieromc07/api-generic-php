<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Servipac</title>


</head>
<body>


    <div class="container">
        <div class="title">
            <div class="title__text">
                <h1>Correo de contacto via Pagina Web</h1>
            </div>
        </div>

           <div class="content">
                <div class="col">
                    <h4>De :</h4>
                    <p>{{$data['name']}}</p>
                </div>
                <div class="col">
                    <h4>Responder a :</h4>
                    <p>{{$data['email']}}</p>
                </div>

                <div class="col">
                <h4>Mensaje : </h4>
                    <p>{{$data['msg']}}</p>
                </div>

            </div>


    </div>



</body>
</html>
