<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CARD EXTERNAL</title>
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
        width: 46%;
        padding: 10px;
      }
      .column2 {
        float: left;
        width: 48.5%;
        height: 300px;
      }
      .column3 {
        float: left;
        width: 1%;
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

    <div style="position: absolute; top:0; width:100%;height:70px; background-color:#ffffff; border-bottom: 10px solid black;">
        <h1 style="text-align: center">CARTÃO DE ACESSO</h1>
    </div>
    <div  style="position: absolute; top:70px; width: 100%">
        <div class="row" style="margin-top: 40px">
        
            <div class="column1" style="border-left: 10px solid black;">
                <div style="margin: 0px 40px 40px 40px; text-align:center">
                    <img height="140px" src="{{$image}}" style="border-radius:20px; text-align:center" alt="">
                    <p style="text-align: center">Nome: <strong>{{$name ?? 'N/A'}}</strong></p>
                    <p style="text-align: center">Empresa: <strong>{{$company ?? 'N/A'}}</strong></p>
                </div>
                
            </div>
            
            <div class="column2" style="border-left: 2px solid black; border-right: 10px solid black;">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('svg')->size(160)->generate('1')) !!}" style="margin: 20px 40px 40px 100px">
            </div>
        </div>
    </div>

    <div style="position: absolute; bottom:0; width:100%; height:70px; background-color:#ffffff;">
        <p style="text-align: center">
            <img height="40" src="https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669738/cdmlogoblue_ezetdo.png" alt="">
        </p>
    </div>
  </body>
</html>