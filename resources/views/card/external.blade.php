<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Cartão de acesso - {{ $customer->documentNumber }}</title>

</head>
<style>
    * {
        /* font-size: 12px; */
        font-family: "inter-variable", sans-serif;
    }

    @page {
        margin: 0px;
    }

    body {
        margin: 0px;
    }

    header {
        position: fixed;
        left: 0px;
        right: 0px;
        height: 150px;
        margin-top: -150px;
    }

    footer {
        position: fixed;
        left: 0px;
        right: 0px;
        height: 150px;
        bottom: 0px;
        margin-bottom: -150px;
    }

    .column1 {
        float: left;
        width: 46%;
        padding: 10px;
        height: 300px;
    }

    .column3 {
        float: left;
        width: 46.0%;
        height: 300px;
    }

    /* linha preta no meio do card */
    .column2 {
        margin-top: 10px;
        float: left;
        width: 0.5%;
        height: 150px;
    }

    /* linha preta no meio do card */



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

    <div
        style="position: absolute; top:0; width:100%; height:50px; background-color:#ffffff; border-bottom: 5px solid black;">
        <h1 style="text-align: center; margin: 5px ;">CARTÃO DE ACESSO</h1>
    </div>
    <div style="position: absolute; top:55px; width: 100%">
        <div class="row" style="margin-top: 10px">
            <div class="column1" style="border-left: 5px solid black;">
                <div style=" text-align:center">
                    <img height="100px" src="{{ $photo }}" style="border-radius:0px; margin-top:-5px;"
                        alt="">
                </div>
                <span style="text-align: left; margin-top:1px; font-weight: bold">Nome:
                    <strong>{{ $customer->name ?? 'N/A' }}</strong></span> <br>
                <span style="text-align: left; font-size: 10px; font-weight: bold">Empresa:
                    <strong>{{ $customer->customerCompany ?? 'N/A' }}</strong></span>
            </div>
            <div class="column2" style="border-left: 2px solid black;">
            </div>
            <div class="column3" style=" border-right: 10px solid black;">
                <img width="110px" src="{{ $qr }}" style="margin: 10px 60px 40px 40px">
            </div>
        </div>
    </div>
    <div style="position: absolute; bottom:0; width:100%; height:40px; background-color:#ffffff;">
        <p style="text-align: center; margin: 0px">
            <img height="35"
                src="https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669738/cdmlogoblue_ezetdo.png"
                alt="">
        </p>
    </div>
    <div style="page-break-before: always">&nbsp;</div>
    <div style="position: absolute; top:0; width:100%;height:60px;">
        <p style="text-align: center; font-size:20px; font-weight: bold">
            CONTACTOS DE EMERGÊNCIA
        </p>
    </div>
    <div style="position: absolute; top:60px; width: 100%; text-align: center;">
        <div class="row">
                <p style="font-size:16px; margin-bottom:12px; font-weight: bold">Ambulância / Ambulance - 877888882</p>
                <p style="font-size:16px; margin-bottom:12px; font-weight: bold">Bombeiros / Fire Brigade - 873888881</p>
                <p style="font-size:16px; margin-bottom:12px; font-weight: bold">Segurança / Security - 820888883</p>
                <p style="font-size:16px; margin-bottom:12px; font-weight: bold">Linha Verde / Hot Line - 800000888</p>
        </div>
    </div>
    <div
        style="position: absolute; bottom:5px; width:100%; height:40px;">
        <p style="text-align: center; font-size:16px; font-weight: bold" >
            Este crachá é pessoal e intransmissível
        </p>
    </div>
</body>

</html>
