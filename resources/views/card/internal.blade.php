<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CARD INTERNAL</title>

  </head>
  <style>
     * {
        /* font-size: 12px; */
        font-family: "inter-variable", sans-serif;
        }
        @page { margin: 0px; }
        body { margin: 0px; }
        .column1 {
          float: left;
          width: 28%;
          padding: 10px;
          height: 300px;
        }
        .column2 {
          float: left;
          width: 38%;
          padding-top: 15px;
        }
        .column3 {
          float: left;
          width: 33%;
          padding: 10px;
          height: 300px;
        }

        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
          }
        }
  </style>

  <body style="background-color: white">

    <div style="position: absolute; top:0; width:100%;height:60px; background-color:#1849A9">
      <p style="text-align: center">
        <img height="40" src="https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669737/cdmlogo_okybij.png"  alt="">
      </p>
    </div>

    <div  style="position: absolute; top:70px; width: 100%">
        <div class="row">
            <div class="column1">
                <img height="160" src="{{$image}}" style="border-radius:20px; margin:40px" alt="">
            </div>
            <div class="column2">
                <p>Nome</p>
                <p><strong>{{$name ?? 'N/A'}}</p>
                <p>Código de funcionário</p>
                <p><strong>{{$code ?? 'N/A'}}</strong></p>
                <p>Departamento</p>
                <p><strong>{{$department ?? 'N/A'}}</strong></p>
            </div>
            <div class="column3">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('svg')->size(160)->generate('1')) !!}" style="margin: 40px 40px 40px 0px">
              </div>
          </div>
    </div>
   

    <div style="position: absolute; bottom:0; width:100%; height:70px; background-color:#E8EDF7; border-top: 1px solid #BECBE6;">
        <p style="text-align: center">
            
        </p>
    </div>
  </body>
</html>