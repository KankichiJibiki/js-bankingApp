<?php include_once('assets/layout/header') ?>

    <main class="container-fluid bg-dark vh-100">
        <!-- container for white -->
        <div class="d-flex justify-content-center align-items-center vh-100">
            <!-- result page -->
            <div class="bg-light col-md-7 col-11 p-3">
               <h2 class="text-center my-3">The money you are going to take is ...</h2> 
               <div class="d-flex flex-column justify-content-center align-items-center mb-4 text-light text-end">
                   <div class="col-7 money_result p-2 row">
                       <div class="col p-2 money_item border border-3">
                           5 * $100
                       </div>
                   </div>
                   <div class="col-7 money_result p-2 row">
                       <div class="col p-2 money_item border border-3">
                           5 * $100
                       </div>
                   </div>
                   <div class="col-7 money_result p-2 row">
                       <div class="col p-2 money_item border border-3">
                           5 * $100
                       </div>
                   </div>
                   <div class="col-7 money_result p-2 row">
                       <div class="col p-2 money_item border border-3">
                           5 * $100
                       </div>
                   </div>
                   <div class="col-7 money_result p-2 row">
                       <div class="col p-2 money_item border border-3">
                           5 * $100
                       </div>
                   </div>
                   <!-- result -->
                   <div class="col-7 money_result p-2 row">
                       <div class="col money_item">
                           Total: $0000
                       </div>
                   </div>
               </div>

               <!-- btn -->
                <div class="row mb-3 justify-content-around">
                    <button type="submit" class="btn btn-outline-primary col-5">Go Back</button>
                    <button type="submit" class="btn btn-primary text-light col-5">Confirm</button>
                </div>
            </div>
        </div>
    </main>

<?php include_once('assets/layout/footer') ?>