<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="((base))">
    <link rel="stylesheet" href="static/fonts/inter.css">
</head>

<style>
    * {
        font-size: 10px;
        font-family: "inter-variable", sans-serif;
        font-variation-settings: 'wght' 400, 'slnt' 0;
    }

    h1 {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 0;
        width: 555px;
        height: 245px;
        background-color: whitesmoke;
        border-radius: 10px;
    }

    body * {
        overflow: hidden;
    }

    header,
    footer {
        text-transform: uppercase;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 20%;
    }

    main {
        height: calc(100% - 22.42% * 2);
    }

    main table {
        margin: 0 10px;
    }

    header {
        background-color: #1849A9;
        color: white;
        height: 22.42%;
    }

    footer {
        background-color: #e8edf7;
        color: black;
        height: 22.24%;
        border-top: 1px solid #becbe6;
    }

    td {
        vertical-align: top;
    }

    .employee-image {
        width: 60px;
        height: 60px;
        border-radius: 10px;
    }

    .field {
        font-weight: bold;
        text-transform: uppercase;
    }

    .field {
        line-height: 1.5;
    }

    .label {
        line-height: 1.2;
    }

    code {
        font-family: monospace;
    }

    .full-height {
        height: 100%;
    }

    .centered {
        height: 100%;
        display: flex;
        align-items: center;
    }
</style>

<body class="((display:card))" id="card-container">
    <header>
        <center>
            <img src="((company.imageUrl))" height="25" alt="" srcset="">
        </center>
    </header>
    <main>
        <table class="full-height">
            <tr class="full-height">
                <td class="full-height" style="width: 19.12%;">
                    <div class="centered">
                        <img class="employee-image" src="((employee.imageUrl))" alt="" srcset="">
                    </div>
                </td>
                <td class="full-height" style="padding: 0 5px; width: (100% - 19.12%*2);">
                    <div class="centered">
                        <div>
                            <span class="label">Nome</span><br>
                            <span class="field">Nome</span><br>
                            <span class="label">Código de funcionário</span><br>
                            <span class="field">000</span><br>
                            <span class="label">Departmento</span><br>
                            <span class="field">Departamento</span><br>
                        </div>
                    </div>
                </td>
                <td class="full-height" style="width: 19.12%;">
                    <div class="centered" id="qrcode">
                    </div>
                </td>
            </tr>
        </table>
    </main>
    <footer>
        <center>
            <code>((mrz))</code>
        </center>
    </footer>
</body>
</html>