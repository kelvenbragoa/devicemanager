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
        width: 27%;
        padding: 10px;
        height: 300px;
    }

    .column2 {
        float: left;
        width: 40%;
        margin-top: 40px;
        margin-left: 2px;
        height: 300px;
    }

    .column3 {
        /* margin-left: 420px; */
        float: right;
        width: 30%;
        padding: 10px;
        height: 300px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
        text-justify: auto
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
            <img height="40" src="https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669737/cdmlogo_okybij.png"
                alt="">
        </p>
    </div>

    <div style="position: absolute; top:50px; width: 100%">
        <div class="row">
            <div class="column1">
                <img width="120px" height="120px" src="{{ $photo }}" style="border-radius:0px; margin-top:30px"
                    alt="">
            </div>
            <div class="column2">
                <small style="font-weight: bold">Nome</small>
                <p style="margin-top:0px; margin-bottom:5px"><strong>{{ $customer->name ?? 'N/A' }}</strong> </p>
                <small style="font-weight: bold">Código de funcionário</small>
                <p style="margin-top:0px; margin-bottom:5px"><strong>{{ $customer->documentNumber ?? 'N/A' }}</strong>
                </p>
                <small style="font-weight: bold">Departamento</small>
                    <p style="margin-top:0px; margin-bottom:5px"><strong>{{ $customer->department ?? 'N/A' }}</strong>
                    </p>
            </div>
            <div class="column3">
                <img height="100px" src="{{ $qr }}" style="margin:40px 140 40px 20px">
            </div>
        </div>
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