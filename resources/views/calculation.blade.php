@extends('layouts.dashboard')

@section('dashboard-content')

    <section class="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4  for">

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline ">
                <div class="box-header d-flex">
                    <h6 class="bh px-1">Client Name:
                        <span>{{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</span>
                    </h6>
                    <h6 class=" px-1">S.A Number: <span>{{ $client->id }}</span></h6>

                </div>
            </form>
            <ul class="navbar-nav ml-auto d-flex">
                </li>
                <nav class="nav-item color">
                    <button class="green-btn px-3 py-1" type="button">
                        <a href="{{ route('clients.index') }}">
                            <i class="fas fa-share"></i>
                        </a>
                    </button>
                </nav>
            </ul>
        </nav>
        <div>
            <h6 class="black"><strong>Present Reading (cu.m)</strong></h6>
            <nav class="nav-item color mx-3">
                <input type="text" class="form-control bg-light  small searc" placeholder="Present Reading..."
                    id="current_reading_input" aria-label="Search" aria-describedby="basic-addon2">
            </nav>
            <button class="calculate ml-4 mt-3" type="button" id="calculate"><i class="fas fa-money-bill-wave"></i>
                Calculate</button>
        </div>
    </section>
    <script>
        const readingInput = document.getElementById("current_reading_input");
        const calculateButton = document.getElementById("calculate");

        const json = @json($client);

        calculateButton.addEventListener('click', function() {

            if (json.type === 0) {
                return computeResidential(readingInput);
            }
            return computeCommercial(readingInput);
        });


        function computeResidential(readingInput) {
            const x = readingInput.value;

            if (x == null || x == '') {
                return alert('Please input a valid number');
            }
            if (x > 0 && x <= 10) {
                return readingInput.value = '75';
            }
            if (x > 10 && x <= 20) {
                return readingInput.value = (((x - 10) * 12) + 75).toString();
            }
            if (x > 20 && x <= 30) {
                return readingInput.value = (((x - 20) * 13.5) + 195).toString();
            }
            if (x > 30 && x <= 40) {
                return readingInput.value = (((x - 30) * 15) + 330).toString();
            }
            if (x > 40 && x <= 50) {
                return readingInput.value = (((x - 40) * 16.5) + 480).toString();
            }
            if (x > 40) {
                return readingInput.value = (((x - 40) * 18) + 645).toString();
            }
        }


        function computeCommercial(readingInput) {
            const x = readingInput.value;

            if (x == null || x == '') {
                return alert('Please input a valid number');
            }
            if (x > 0 && x <= 10) {
                return readingInput.value = '100';
            }
            if (x > 10 && x <= 20) {
                return readingInput.value = (((x - 10) * 15) + 100).toString();
            }
            if (x > 20 && x <= 30) {
                return readingInput.value = (((x - 20) * 16.5) + 250).toString();
            }
            if (x > 30 && x <= 40) {
                return readingInput.value = (((x - 30) * 18) + 415).toString();
            }
            if (x > 40 && x <= 50) {
                return readingInput.value = (((x - 40) * 19.5) + 595).toString();
            }
            if (x > 50) {
                return readingInput.value = (((x - 40) * 21) + 805).toString();
            }
        }
    </script>

@endsection
