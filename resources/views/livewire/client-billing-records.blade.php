<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 naci">

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <h4 class="color-grey">
                                Client Records
                            </h4>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto d-flex">
                        </li>
                        <nav class="nav-item color">
                            <a href="#">
                                Home
                            </a>
                            <a class="dropdown-toggle mx-4" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bill
                            </a>
                            <a href="#">
                                Data Tables
                            </a>
                        </nav>
                    </ul>
                </nav>
            </div>

    </section>
    <!-- Main content -->
    <section class="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 ">

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline">
                <div class="box-header d-flex">
                    <h6 class="bh px-1">Client Name: <span>
                            {{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</span>
                    </h6>
                    <h6 class="bh px-1">Client ID: {{ $client->id }}</h6>
                    <h6 class="px-1 mink">Next payment Date: March 3, 2022</h6>
                </div>
            </form>
            <ul class="navbar-nav ml-auto d-flex">
                </li>
                <nav class="nav-item color">
                    <button class="green-btn px-3 py-1"><i class="fas fa-share"></i></button>
                </nav>
            </ul>
        </nav>
    </section>
    <section class="content">
        <nav class="navbar  navbar-light  ">

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline">
                <div class="box-header d-flex">
                    <label class="show">Show</label>
                    <select class="form-select form-control options" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <label class="show">entries</label>
                </div>
            </form>
            <ul class="navbar-nav ml-auto d-flex">
                </li>
                <nav class="nav-item color">
                    <input type="text" class="form-control bg-light  small searc" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                </nav>
            </ul>
        </nav>
    </section>
    </section>
    <table class="table ml-1">
        <thead>
            <tr>
                <th scope="col">
                    <p>Present Reading</p>
                </th>
                <th scope="col">
                    <p>Previous Reading</p>
                </th>
                <th scope="col">
                    <p>Consumption</p>
                </th>
                <th scope="col">
                    <p>Price</p>
                </th>
                <th scope="col">
                    <p>Date</p>
                </th>
                <th scope="col">
                    <p>Bill Amount</p>
                </th>
                <th scope="col">
                    <p>Tools</p>
                </th>`
            </tr>
        </thead>
        <tbody>
            <tr class="align">
                <th scope="col">
                    <p>1</p>
                </th>
                <th scope="col">
                    <p>20</p>
                </th>
                <th scope="col">
                    <p>19</p>
                </th>
                <th scope="col">
                    <p>190</p>
                </th>
                <th scope="col">
                    <p>Feb 3, 2022</p>
                </th>
                <th scope="col">
                    <p>3,600.00</p>
                </th>
                <th scope="col">
                    <button class="bill-wave"><i class="fas fa-money-bill-wave"></i></button>
                    <button class="print"><i class="fas fa-print"></i></button>
                    <button class="delete"><i class="fas fa-trash"></i></button>
                </th>
            </tr>
        </tbody>
</div>
</div>
