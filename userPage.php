<?PHP include_once('assets/layout/header') ?>

<body>
  <main class="container-fluid bg-dark vh-100">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <!-- page -->
        <div class="col-md-9 col-10 bg-info p-4 d-flex flex-column text-light">
            <!-- User info -->
            <div class="col-12 text-end mb-3">
                <div class="fw-bolder mb-1">Your Name: Kaiden Herman</div>
                <div class="fw-bolder mb-1">Your Back ID: 12345678</div>
                <div class="fw-bolder mb-1">Your First Deposit: $205.00</div>
            </div>

            <!-- deposit -->
            <div class="bg-danger col-12 p-2 d-flex flex-row justify-content-between fs-4 mb-3">
                <div class="stText">Available Balance</div>
                <div class="stText">$12,345</div>
            </div>

            <!-- options -->
            <div class="col-12 d-flex flex-wrap text-uppercase text-center p-2 justify-content-between align-items-start">
                <div class="col-md-3 col-12 op_con p-3 stText mb-1">
                    <div class="fs-4">withdrawl</div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="col-md-3 col-12 op_con p-3 stText mb-1">
                    <div class="fs-4">deposit</div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="col-md-3 col-12 op_con p-3 stText mb-1">
                    <div class="fs-4">come back later</div>
                    <i class="fa-solid fa-house"></i>
                </div>
            </div>
        </div>
    </div>
  </main>

<?PHP include_once('assets/layout/footer') ?>