<?php include_once('assets/layout/header') ?>

    <div class="container-fluid bg-dark vh-100">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-7 col-11 bg-light p-3">
                <h2 class="text-center my-3">How many days will you be gone</h2>
                <div class="col-12 mb-3">
                    <input type="number" name="length" id="length" class="form-control" placeholder="4 days">
                </div>

                <!-- btn -->
                <div class="row justify-content-around">
                    <button type="submit" class="btn btn-outline-primary col-5">Go Back</button>
                    <button type="submit" class="btn btn-primary text-light col-5">Next</button>
                </div>
            </div>
        </div>
    </div>

<?php include_once('assets/layout/footer') ?>