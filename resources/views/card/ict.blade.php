<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICT Standby Checklist</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            width: 180px;
        }
        .checkbox {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>ICT STANDBY CHECKLIST</h1>
    <p>Employee Name: <strong>Gerson Houane</strong></p>
    <p>Date: <strong>24/03/2024</strong> | Time: <strong>16:30</strong></p>

    <h2>IT Infrastructure - Physical check on server rooms</h2>
    <table>
        <tr>
            <th>Server Room Main</th>
            <td>
                <input type="checkbox" checked> <label class="checkbox">Check of alerts on physical server HDDs</label><br>
                <label class="checkbox"><input type="checkbox" checked> Electricity</label><br>
                <label class="checkbox"><input type="checkbox" checked> Cooling - Air Conditioners</label><br>
                <label class="checkbox"><input type="checkbox" checked> Security - Locked Door</label><br>
                <label class="checkbox"><input type="checkbox" checked> Automatic Fire Alarm System</label><br>
                <label class="checkbox"><input type="checkbox" checked> Battery Backup</label><br>
                <strong>Notes:</strong> <textarea rows="3" style="width: 100%;">notes goes here</textarea>
            </td>
        </tr>
        <tr>
            <th>Server Room DR</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> Check of alerts on physical server HDDs</label><br>
                <label class="checkbox"><input type="checkbox" checked> Electricity</label><br>
                <label class="checkbox"><input type="checkbox" checked> Cooling - Air Conditioners</label><br>
                <label class="checkbox"><input type="checkbox" checked> Security - Locked Door</label><br>
                <label class="checkbox"><input type="checkbox" checked> Automatic Fire Alarm System</label><br>
                <label class="checkbox"><input type="checkbox" checked> Battery Backup</label><br>
                <strong>Notes:</strong> <textarea rows="3" style="width: 100%;">notes goes here</textarea>
            </td>
        </tr>
    </table>

    <h2>Servers Infrastructure - Remotely check the status of servers</h2>
    <table>
        <tr>
            <td>Domain Controllers</td>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <th>Exchange</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <th>File Server</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <th>Antivirus Server EPO</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <th>Other Servers</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <th>Navis N4 Production</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <th>Navis N4 Test</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <th>Sage 300 ERP</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <th>Sage HR</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <th>UNIS & Web Register</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> CPU</label>
                <label class="checkbox"><input type="checkbox" checked> RAM</label>
                <label class="checkbox"><input type="checkbox" checked> Disk Space</label>
                <label class="checkbox"><input type="checkbox" checked> Services</label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <strong>Notes:</strong> <textarea rows="3" style="width: 100%;">notes goes here</textarea>
            </td>
        </tr>
    </table>


    <h2>Others</h2>
    <table>
        <tr>
            <th>Electricity Issues</th>
            <td>
                <label class="checkbox"><input type="checkbox"> Yes</label>
                <label class="checkbox"><input type="checkbox" checked> No</label>
                <strong>Notes:</strong> <textarea rows="3" style="width: 100%;">notes goes here</textarea>
            </td>
        </tr>
        <tr>
            <th>Weighbridge Shed 1</th>
            <td>
                <label class="checkbox"><input type="checkbox"> Operational</label>
                <label class="checkbox"><input type="checkbox" checked> Non Operational</label>
                <strong>Notes:</strong> <textarea rows="3" style="width: 100%;">notes goes here</textarea>
            </td>
        </tr>
        <tr>
            <th>Weighbridge Shed 5</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> Operational</label>
                <label class="checkbox"><input type="checkbox"> Non Operational</label>
                <strong>Notes:</strong> <textarea rows="3" style="width: 100%;">notes goes here</textarea>
            </td>
        </tr>
        <tr>
            <th>Weighbridge Shed 7</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> Operational</label>
                <label class="checkbox"><input type="checkbox"> Non Operational</label>
                <strong>Notes:</strong> <textarea rows="3" style="width: 100%;">notes goes here</textarea>
            </td>
        </tr>
        <tr>
            <th>Weighbridge Clinker</th>
            <td>
                <label class="checkbox"><input type="checkbox" checked> Operational</label>
                <label class="checkbox"><input type="checkbox"> Non Operational</label>
                <strong>Notes:</strong> <textarea rows="3" style="width: 100%;">notes goes here</textarea>
            </td>
        </tr>
    </table>
</div>

</body>
</html>