<?PHP include_once('assets/layout/header') ?>

<body>
  <main class="container-fluid bg-dark vh-100">
    <div class="d-flex justify-content-center align-items-center vh-100 p-2" id="initialForm">
        <!-- info container -->
        <div class="col-md-7 col-10 justify-content-center align-items-center d-flex flex-column bg-light p-4" id="initial-form">
            <h2 class="my-4 text-center">Please type your information below</h2>
            <div classz="col-11 justify-content-center align-items-center d-flex">
                <form action="" method="post" onsubmit="initializeUserAccount(); event.preventDefault()" id="bank-form">
                    <!-- first and last name -->
                    <div class="row mb-3 justify-content-center">
                        <div class="col-6">
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name">
                        </div>
                        <div class="col-6">
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name">
                        </div>
                    </div>
        
                    <!-- bank id -->
                    <div class="mb-3">
                        <input type="text" name="bank_id" id="bank_id" class="form-control" placeholder="Enter your bank ID">
                    </div>
        
                    <!-- deposit -->
                    <div class="mb-3">
                        <input type="text" name="initialDeposit" id="initialDeposit" class="form-control" placeholder="Enter your first deposit">
                    </div>

                    <!-- saving or checking -->
                    <div class="form-group mb-3">
                        <div class="form-check justify-content-center d-flex">
                            <input type="radio" name="accountType" id="accountType" class="form-check-input me-1" value="saving">
                            <label for="accountType" class="form-check-label">Savings</label>
                        </div>

                        <div class="form-check justify-content-center d-flex">
                            <input type="radio" name="accountType" id="accountType" class="form-check-input me-1" value="checking">
                            <label for="accountType" class="form-check-label">Checkings</label>
                        </div>
                    </div>

                    <!-- btn -->
                    <div class="mb-3">
                        <button type="submit" class="col-12 btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <div id="bankPage" class="bg-green col-12 text-center text-white">
            </div>
        </div>
    </div>
    <!-- 2ページ目の枠 -->
    <div id="bankPage" class="bg-green col-12 text-center text-white">

    </div>
    <!-- menu先のページ -->
    <div id="sidePage" class="bg-white col-12 text-center">
        
    </div>
  </main>

  <?PHP include_once('assets/layout/footer') ?>