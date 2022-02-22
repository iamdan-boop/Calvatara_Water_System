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
.pdf-title h2{
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
/* .donn {
    display: flex;
    justify-content: space-between;
} */
.donns {
    margin-top: 10%;
    display: flex;
    justify-content: space-between;
}
.stronk {
    margin-right: 30%;
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
.donn {
    display: -webkit-box; /* wkhtmltopdf uses this one */
    display: flex;
    -webkit-box-pack: center; /* wkhtmltopdf uses this one */
    justify-content: space-between;
}

.donn > div {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    flex: 1;
}

.donn > div:last-child {
    margin-right: 0;
}
.donni {
    display: -webkit-box; /* wkhtmltopdf uses this one */
    display: flex;
    -webkit-box-pack: initial; /* wkhtmltopdf uses this one */
    justify-content: space-between;
}

.donni > div {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    flex: 1;
}

.donni > div:last-child {
    margin-right: 0;
}
.strongk {
   font-size: 17px
}
.strongker {
    margin-left: 30px
}
    </style>
    <div class="pdf-container">
        <div class="pdf-wrapper">
            <div class="pdf-title">
                <h2>Calatrava WoterWorks <br /> Municipality of Calatrava, Negros Occidental <br /> STATEMENT OF ACCOUNT
                </h2>
            </div>
            <div class="donn routee">
                <div class="nr">
                    <label></label> <br />
                    <label></label> <br />
                    <label></label> <br />
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
                    <p><label class="stronk"><strong>Route:</strong> </label><label class="sper"> calampiwasan</label>
                    </p>
                    <p><label for=""></label></p>
                    <p> <label class="stronk"><strong>Type:</strong></label> <label class="sper">residential</label>
                    </p>
                    <p> <label class="stronk"><strong>Size:</strong></label> <label class="sper">1/2</label></p> 
                </div>
                <div class="donn">
                    <p><label class="stronk"><strong>Month:</strong> </label><label class="sper"></label></p>
                    <p><label class="stronk"><strong>Period From:</strong></label><label class="sper"></label></p>
                    <p> <label class="stronk"><strong>Period To:</strong></label> <label class="sper"></label></p>
                    <p> <label class="stronk"><strong>Due Date:</strong></label> <label class="sper"></label></p>
                    <p> <label class="strongk"><strong>CU.M:</strong></label> <label class="sper">7</label></p>
                </div>
                <div class="donn">
                    <p><label class="stronk donni"><strong>Read No.:</strong> </label><label class="sper">028</label></p>
                    <p><label class="stronk"><strong>Read Date:</strong></label><label class="sper"></label></p>
                    <p> <label class="stronk"><strong>Previous:</strong></label> <label class="sper">028</label></p>
                    <p> <label class="stronk"><strong>Present:</strong></label> <label class="sper">281</label></p> 
                    <p> <label class="stronk"></label> <label class="sper"></label></p> 
                </div>
            </div>
            <div class="charges">
                <p><label class="stronk"><strong>Charges:</strong></label></p>
                <p class="donni"><label><strong>Basic Water Charges:</strong>     P</label>
                <label class="donn">HP 50.00</label><label></label></p>
                <p class="donni"><label><strong>Arrears-Basic Water Charges:</strong>     P</label>
                    <label class="donn">HP 150.00</label></p>
                <p><label>-</label></p>
            </div>
            <div class="charges">
                <p class="donn sper strongk"><label><strong>total amount:   PHP</strong></label><label><strong>
                            150.00</strong></label> <label></label></p>
            </div>
            <div class="donn">
                <p> <label class="stronk"></label> <label class="sper"></label></p> <br />
                <p><label class="stronk"><strong>Meter Reader </strong></label><label class="sper"> </label></p>
                <p><label class="stronk">Please ignore if this bill payment has been made</label></p>
                <p> <label class="stronk"><strong>WaterWorks OIC</strong></label> <label class="sper"></label></p>
                <p> <label class="stronk"></label> <label class="sper"></label></p> <br />
            </div>
        </div>
    </div>
</body>

</html>
