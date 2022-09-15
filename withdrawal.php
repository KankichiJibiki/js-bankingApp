<?PHP include_once('assets/layout/header') ?>

<!-- content for black content -->
<main class="container-fluid bg-dark vh-100">
    <!-- content for light content -->
    <div class="d-flex justify-content-center align-items-center p-3 vh-100">
        <!-- page -->
        <div class="col-md-7 col-11 p-2 text-center bg-light">
            <form action="" method="post">
                <h2 class="my-3">Please Enter The Withdrawal Amount</h2>
                <div class="form-group row mb-3">
                    <label for="100" class="col-form-label col-form-label-sm col-2">$100</label>
                    <div class="col-10">
                        <input type="number" name="100" id="100" class="form-control form-control-sm text-end">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="50" class="col-form-label col-form-label-sm col-2">$50</label>
                    <div class="col-10">
                        <input type="number" name="50" id="50" class="form-control form-control-sm text-end">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="20" class="col-form-label col-form-label-sm col-2">$20</label>
                    <div class="col-10">
                        <input type="number" name="20" id="20" class="form-control form-control-sm text-end">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="10" class="col-form-label col-form-label-sm col-2">$10</label>
                    <div class="col-10">
                        <input type="number" name="10" id="10" class="form-control form-control-sm text-end">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="5" class="col-form-label col-form-label-sm col-2">$5</label>
                    <div class="col-10">
                        <input type="number" name="5" id="5" class="form-control form-control-sm text-end">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="1" class="col-form-label col-form-label-sm col-2">$1</label>
                    <div class="col-10">
                        <input type="number" name="1" id="1" class="form-control form-control-sm text-end">
                    </div>
                </div>

                <div class="col-12 p-4 text-dark money-box mb-3 text-light">
                    <div>$0.00</div>
                </div>

                <div class="row mb-3 justify-content-around">
                    <button type="submit" class="btn btn-outline-primary col-5">Go Back</button>
                    <button type="submit" class="btn btn-primary text-light col-5">Next</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?PHP include_once('assets/layout/footer') ?>