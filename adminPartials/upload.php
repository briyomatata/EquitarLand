<?php
include('../partials/navheader.php');

?>
<body>

    <div class="conatiner">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Upload Data</h1>
                </div>

                <div class="panel panel-body">
                    <form action="">
                        <div class="form-group">
                            <label >Land Description</label>
                            <input type="text" class="form-control" id="description">
                        </div>

                        <div class="form-group">
                            <label >Land Price</label>
                            <input type="text" class="form-control" id="price">
                        </div>

                        <div class="form-group">
                            <label >Land Location</label>
                            <input type="text" class="form-control" id="location">
                        </div>

                        <div class="form-group">
                            <label >Land Size</label>
                            <input type="text" class="form-control" id="size">
                        </div>

                        <div class="form-group">
                            <label >Land Water</label>
                            <input type="text" class="form-control" id="water">
                        </div>

                        <div class="form-group">
                            <label >Land Electricity</label>
                            <input type="text" class="form-control" id="electricity">
                        </div>
                    </form>



                </div>
                <div class="panel panel-footer">
                    <small> &copy; OtienoMatata</small>
                </div>

            </div>
        </div>
    </div>
    
    <?php

include('../partials/footer.php');

?>


</body>
</html> 