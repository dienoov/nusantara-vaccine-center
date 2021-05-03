<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaccination Card</title>
    <style>
        @page {
            size: 3.5in 2in;
            margin: .1in;
        }

        body {
            font-family: Roboto, sans-serif;
            margin: 0;
            font-size: 50%;
            color: #071838;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: Montserrat, sans-serif;
            margin-top: 0;
            margin-bottom: 4pt;
        }

        p {
            margin-top: 0;
            margin-bottom: 4pt;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            border: .5pt solid #071838;
        }

        table thead tr th:first-child, table tbody tr td:first-child {
            border-left: none;
        }

        table thead tr th:last-child, table tbody tr td:last-child {
            border-right: none;
        }

        table td {
            border: .25pt solid #071838;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .float-right {
            position: absolute;
            right: 1in;
            top: .03in;
        }

        .text-underline {
            text-decoration: underline;
        }

        .border-bottom-1 {
            border-bottom: .25pt solid #071838;
        }

        .w-20 {
            width: 20%;
        }
    </style>
</head>
<body>
<h2 class="text-underline">COVID-19 Vaccination Record Card</h2>
<img src="data:image/png;base64,{{ $logo }}" alt="logo" class="float-right" height="8">
<p>Please keep this record card, which includes medical information about the vaccines you have received.</p>
<p>Harap simpan kartu catatan ini, yang memuat informasi medis tentang vaksin yang telah anda terima.</p>
<h4 class="border-bottom-1 text-uppercase">{{ $user->name }}</h4>
<h4 class="border-bottom-1">{{ date('d M Y',strtotime($user->dob)) }}</h4>
<table>
    <thead>
    <tr>
        <th>Vaccine</th>
        <th class="w-20">Brand</th>
        <th class="w-20">Date</th>
        <th>Vaccine Center</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1st Dose Administered</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2nd Dose Administered</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Other</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Other</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>
</body>
</html>
