<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proof of Registration</title>
    <style>
        body {
            font-family: Roboto, sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: Montserrat, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .mt-0 {
            margin-top: 0;
        }

        .mt-4 {
            margin-top: 2rem;
        }

        .mb-2 {
            margin-bottom: .5rem;
        }

        .mb-4 {
            margin-bottom: 2rem;
        }

        .w-20 {
            width: 20%;
        }

        .w-30 {
            width: 30%;
        }

        .font-weight-bold {
            font-weight: bold;
        }

        .bg-grey {
            background-color: #ebeef2;
        }

        .border-1 {
            border: 1px solid #071838;
        }
    </style>
</head>
<body>
<div class="text-center">
    <img src="data:image/png;base64,{{ $logo }}" alt="logo" height="32">
    <h3 class="text-uppercase mt-4 mb-2">Proof of Registration</h3>
    <h4 class="mt-0 mb-2">To Whom It May Concern</h4>
</div>
<div class="text-right">
    {{ date('d/m/y', strtotime($user->created_at)) }}
</div>
<p class="mb-4">
    It is hereby confirmed that the under mentioned person is a registered user at the Nusantara Vaccine Center.
</p>
<table class="mb-4">
    <tr>
        <td class="font-weight-bold w-20">NIK:</td>
        <td class="text-uppercase">{{ $user->nik }}</td>
    </tr>
    <tr>
        <td class="font-weight-bold w-20">Name:</td>
        <td class="text-uppercase">{{ $user->name }}</td>
    </tr>
    <tr>
        <td class="font-weight-bold w-20">Address:</td>
        <td class="text-uppercase">{{ $user->address }}</td>
    </tr>
    <tr>
        <td class="font-weight-bold w-20">Contact:</td>
        <td class="text-uppercase">{{ $user->contact }}</td>
    </tr>
    <tr>
        <td class="font-weight-bold w-20">Registered to:</td>
        <td class="text-uppercase">{{ $user->vac_center->name }}</td>
    </tr>
</table>
<table class="border-1 mb-4">
    <thead>
    <tr class="bg-grey">
        <th class="text-left">Name</th>
        <th class="text-left">Address</th>
        <th class="text-left">Contact</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $user->vac_center->name }}</td>
        <td>{{ $user->vac_center->address }}</td>
        <td>{{ $user->vac_center->contact }}</td>
    </tr>
    </tbody>
</table>
<p>
    Nusantara Vaccine Center currently has a backlog in the processing of registration in the category which you have
    applied for registration. The backlog is due to the high volumes of registration received by Nusantara Vaccine
    Center since the beginning of this year. Nusantara Vaccine Center is doing everything within its means and available
    resources to process and finalise these registrations.
</p>
<p>
    Your online web ID is {{ $user->id }}. This web ID is to be used solely for the purpose of tracking your
    registration on the Nusantara Vaccine Center system.
    <span class="font-weight-bold text-uppercase">
        This is not a registration number, nor should it be used as such.
    </span>
</p>
</body>
</html>
