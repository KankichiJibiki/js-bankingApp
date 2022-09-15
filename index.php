<?PHP include_once('assets/layout/header') ?>

<body>
  <main class="container-fluid bg-dark vh-100">
    <div class="d-flex justify-content-center align-items-center vh-100 p-2">
        <!-- info container -->
        <div class="col-md-7 col-10 justify-content-center align-items-center d-flex flex-column bg-light p-4">
            <h2 class="my-4 text-center">Please type your information below</h2>
            <div classz="col-11 justify-content-center align-items-center">
                <form action="" method="post">
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
                        <input type="text" name="deposit" id="deposit" class="form-control" placeholder="Enter your first deposit">
                    </div>

                    <!-- btn -->
                    <div class="mb-3">
                        <button type="submit" class="col-12 btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </main>

  <?PHP include_once('assets/layout/footer') ?>