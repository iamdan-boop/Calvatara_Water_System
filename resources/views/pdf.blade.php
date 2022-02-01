<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Calatrava WaterWorks - Dashboard</title>

    <!-- Custom fonts for this template-->
    {{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> --}}

    <!-- Custom styles for this template-->
    {{-- <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    {{-- <script src="https://kit.fontawesome.com/5e81b262d9.js" crossorigin="anonymous"></script> --}}
</head>

<body id="page-top">
    <style>
        .clt {
            height: 50px;
        }

        .content .box-header .regis {
            margin-left: 5%;
            margin-bottom: 1%;
            color: #fff;
            height: 35px;
            border: none;
            outline: none;
            border-radius: 5px;
            background-color: #4e73df;
        }

        .content .box-header .regis:hover {
            background-color: rgb(39, 80, 204);
        }

        .edit {
            background-color: rgb(80, 156, 4);
            color: white;
            border: none;
            border-radius: 2px;
            outline: none;
        }

        .edit:hover {
            background-color: rgb(47, 94, 1);
            color: rgb(202, 200, 200);
        }

        .delete {
            margin-top: 2px;
            background-color: orangered;
            padding: 1px 8px 1px;
            color: white;
            border: none;
            border-radius: 2px;
            outline: none;
        }

        .delete:hover {
            background-color: rgb(167, 46, 2);
            color: rgb(202, 200, 200);
        }

        .closing {
            background-color: transparent;
            border: none;
            outline: none;
        }

        .bills-con {
            text-align: center;
        }

        .bills-con .bills {
            text-align: center;
        }

        .bill-money {
            background-color: rgb(212, 212, 60);
            color: white;
            border: none;
            outline: none;
            border-radius: 2px;
        }

        .bill-money a {
            text-decoration: none;
            color: white;
        }

        .bill-money:hover {
            background-color: rgb(131, 131, 36);
            color: rgb(202, 200, 200);
        }

        .eye {
            background-color: #78a0f8;
            color: white;
            border: none;
            outline: none;
            border-radius: 2px;
        }

        .eye a {
            text-decoration: none;
            color: #fff;
        }

        .eye:hover {
            background-color: #385ba8;
            color: rgb(202, 200, 200);
        }

        .edit-text {
            padding: 0;
            float: right;
            border: none;
        }

        .label-text {
            color: #2e59d9;
            cursor: pointer;
        }

        .label-text:hover {
            border-bottom: 1px solid #2e59d9;
        }

        .btn-edit {
            color: white;
        }

        .btn-edit:hover {
            background-color: rgb(47, 94, 1);
            color: rgb(202, 200, 200);
        }

        .navs {
            margin-left: 50px;
        }

        .color a {
            color: grey;
        }

        .naci {
            border-bottom: 2px solid #4e73df;
        }

        .bh {
            border-right: 1px solid grey;
        }

        .mink {
            color: rgb(248, 78, 78);
        }

        .print {
            border: none;
            outline: none;
            background-color: rgb(35, 150, 189);
            border-radius: 2px;
            color: #fff;
        }

        .green-btn {
            background-color: rgb(39, 167, 39);
            color: white;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        .green-btn:hover {
            background-color: rgb(17, 102, 17);
        }

        .show {
            font-size: 12px;
        }

        .options {
            font-size: 10px;
            padding: 5px;
        }

        .searc {
            border: 1px solid lightgray;
            height: 30px;
        }

        .sear {
            border: 1px solid lightgray;
            height: 30px;
            width: 40%;
            outline: 1px solid darkgray;
        }

        .searchi {
            height: 20px;
            width: 29%;
            border: 1px solid rgb(15, 5, 5);
            outline: none;
        }

        .super {
            text-align: center;
        }

        .black {
            color: black;
            margin-left: 20px;
        }

        .for {
            border-top: 2px solid #2e59d9;
        }

        .calculate {
            background-color: #2e59d9;
            color: white;
            padding: 5px;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        .bill-wave {
            background-color: rgb(57, 179, 57);
            color: white;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        .bill-wave:hover {
            background-color: rgb(43, 119, 43);
            color: white;
        }

        .print:hover {
            background-color: rgb(30, 102, 126);
            color: white;
        }

        .pic {
            border-radius: 50px;
            height: 30px;
            width: 30%;
        }

        .drop {
            text-decoration: none;
            float: right;
        }

        .upld {
            font-size: 15px;
            background-color: transparent;
            outline: none;
        }

        /* <-- PDF --> */
        .pdf-container {
            color: #333;
        }

        .pdf-wrapper {
            margin-left: 4%;
            margin-right: 4%;
        }

        .pdf-title {
            text-align: center;
        }

        .pdf-title h2 {
            font-size: 20px;
        }

        .routee {
            border-bottom: 2px solid black;
        }

        .ns {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid black;
        }

        .ns .nr .pdf-name {
            margin-top: 10%;
        }

        .S.A {
            margin-right: 10px;
        }

        .donn {
            display: flex;
            justify-content: space-between;
        }

        .donns {
            margin-top: 10%;
            display: flex;
            justify-content: space-between;
        }

        .stronk {
            font-size: 17px;
        }

        .stronks {
            margin-top: 7%;
            font-size: 14px;
        }

        .sper {
            margin-top: 10px;
            text-transform: uppercase;
            margin-left: 5px;
        }

        .charges {
            border-bottom: 2px solid black;
        }

        .total-am {
            display: flex;
            border-bottom: 2px solid black;
        }

    </style>
    <div class="pdf-container">
        <div class="pdf-wrapper">
            <div class="pdf-title">
                <h2>Calatrava WoterWorks <br /> Municipality of Calatrava, Negros Occidental <br /> STATEMENT OF ACCOUNT
                </h2>
            </div>
            <div class="ns">
                <div class="nr">
                    <h3 class="pdf-name"><strong>Buan, John Michael M.</strong>
                        <h4>CALAMPISAWAN</h4>
                    </h3><br />

                </div>
                <ul>
                    <h6>S.A No.: 0038284</h6>
                    <h6>Date:</h6>
                    <h6>StubOut No.:</h6>
                    <h6>Meter No.:</h6>
                </ul>
            </div>
            <div class="routee">
                <div class="donn">
                    <p><label class="stronk">Route: </label><label class="sper"> calampiwasan</label>
                    </p>
                    <p><label for=""></label></p>
                    <p> <label class="stronk">Type:</label> <label class="sper">residential</label>
                    </p>
                    <p> <label class="stronk">Size:</label> <label class="sper">1/2</label></p> <br />
                </div>
                <div class="donn">
                    <p><label class="stronk">Month: </label><label class="sper"> </label></p>
                    <p><label class="stronk">Period From:</label></p>
                    <p> <label class="stronk">Period To:</label> <label class="sper"></label></p>
                    <p> <label class="stronk">Due Date:</label> <label class="sper"></label></p>
                    <br />
                    <p> <label class="stronk">CU. Meter</label> <label class="sper"></label></p>
                    <br />
                </div>
                <div class="donn">
                    <p><label class="stronk">Read No.: </label><label class="sper"> </label></p>
                    <p><label class="stronk">Read Date:</label></p>
                    <p> <label class="stronk">Previous:</label> <label class="sper"></label></p>
                    <p> <label class="stronk">Present:</label> <label class="sper"></label></p> <br />
                    <p> <label class="stronk"></label> <label class="sper"></label></p> <br />
                </div>
            </div>
            <div class="charges">
                <p><label class="stronk"><strong>Charges:</strong></label></p>
                <p class="donn"><label>Basic Water Charges</label> <label>PHP 50.00</label><label></label></p>
                <p class="donn"><label>Arrears-Basic Water Charges</label><label>PHP 150.00</label>
                    <label></label>
                </p>
                <p><label>-</label></p>
                <p><label>-</label></p>
                <p><label>-</label></p>
            </div>
            <div class="charges">
                <p class="donn sper"><label><strong>total amount</strong></label><label><strong>PHP
                            150.00</strong></label> <label></label></p>
            </div>
            <div class="donns">
                <p> <label class="stronk"></label> <label class="sper"></label></p> <br />
                <p><label class="stronk">Meter Reader </label><label class="sper"> </label></p>
                <p><label class="stronks">Please ignore if this bill payment has been made</label></p>
                <p> <label class="stronk">WaterWorks OIC</label> <label class="sper"></label></p>
                <p> <label class="stronk"></label> <label class="sper"></label></p> <br />
            </div>
        </div>
    </div>
</body>

</html>
