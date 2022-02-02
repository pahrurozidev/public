<!-- navbar -->
<?php include('partials/navbar.php')  ?>
<!-- navbar -->

<!-- broadcrumb -->
<?php include('partials/broadcrumb.php') ?>
<!-- broadcrumb -->

<div class="container" style="margin-top: 1em; margin-bottom: 10em;">
    <div class="row">
        <div class="col-lg-6">
            <h2>Contact</h2>
            <form action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name*</label>
                    <div class="d-flex">
                        <input type="text" class="form-control me-3" placeholder="first name">
                        <input type="text" class="form-control" placeholder="last name">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Website / URL</label>
                    <input type="text" class="form-control" placeholder="www.example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address*</label>
                    <input type="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="number" class="form-control" placeholder="phone number">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comment or Message*</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn text-white" style="background: rgb(96, 94, 216) !important;">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- footer -->
<!-- <div class="position-absolute bottom-0 start-0 end-0"> -->
    <?php include('partials/footer.php') ?>
<!-- </div> -->
<!-- footer -->