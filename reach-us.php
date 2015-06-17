<?php include("includes/layout_header.php") ?>

<div id="reachUs" class="container-fluid">
    <?php include("includes/menu.php") ?>
    <div class="row content-wrapper">
        <div class="page-header">
            <h2>REACH US</h2>
        </div>

        <div class="container text-center">
            <div class="location"></div>
            <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7774.829100590802!2d80.21629956378611!3d13.009252362287734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xe77f348c1f97cc5c!2sTrue+Tech+Solutions+Private+Limited!5e0!3m2!1sen!2sin!4v1420649289308" width="100%" height="465" frameborder="0" style="border:0"></iframe-->
            <div style="margin: 30px 0 90px;">
                <span class="fa fa-map-marker"></span>
                <p>
                    <strong>ENTERPRISE TOUCH</strong><br>
                    5th Floor, Siddharth Tower, 4, T.V.K. Indl. Estate, Guindy - 600032. India.
                </p>
                <p>+91 44 42009710 , +91 96773 36622, +91 96773 36622</p>
                <a href="mailto: naren@enterprisetouch.com">naren@enterprisetouch.com</a>
            </div>

            <div>
                <span class="fa fa-paper-plane-o"></span>
                <p><strong>CONTACT</strong></p>

                <div class="col-md-12" style="margin: 10px 0 30px;">
                    <div id="innerTab" class="text-center">
                        <ol class="nav nav-pills inner-nav">
                            <li><a class="active" href="">Get Enterprise Touch</a></li>
                            <li><a href="">Become a Reseller</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2 text-left">
                    <form action="" method="post">
                        <div class="row">
                            <?php include("includes/reachus-mailer.php") ?>
                            <input name="subject" value="Enquiry for Get Enterprise touch" type="hidden" id="enqSubject">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputName">Name</label>
                                    <input name="name" type="text" class="form-control" id="InputName">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputEmail">Email address</label>
                                    <input name="email" type="email" class="form-control" id="InputEmail">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputNumber">Mobile Number</label>
                                    <input name="mobilenumber" type="text" class="form-control" id="InputNumber">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">Message</label>
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary pull-right">SEND</button>
                        <button type="reset" class="btn btn-default pull-right">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/page_footer.php") ?>

<script>
    $('#innerTab a').click(function (event){
        event.preventDefault();
        $('#innerTab a').removeClass('active');
        $(this).addClass('active');
        
        var subText = $(this).html();
        
        $('#enqSubject').val('Enquiry for '+subText);
    });
</script>

<?php include("includes/layout_footer.php") ?>