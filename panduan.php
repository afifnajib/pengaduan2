<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monster Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/favicon.png">
    <link href="public/css/style.min.css" rel="stylesheet">
</head>
<style type="text/css">
.accordion-collapse{
    margin: 20px;
}
.accordion .fa{
    margin-right: 0.5rem;
    font-size: 24px;
    font-weight: bold;
    position: relative;
    top: 2px;
}
.btn-block {
    text-align: left;
}
</style>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Panduan</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Panduan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="accordion-collapse">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header waves-effect waves-dark" id="headingOne">
                                            <h2 class="mb-0">
                                                <button type="button" class="btn btn-link btn-block waves-effect waves-dark

                                                " data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-angle-right"></i> What is HTML?</button>                                   
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body bg-dark">
                                                <p class="text-light">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header waves-effect waves-dark" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button type="button" class="btn btn-link btn-block collapsed waves-effect waves-dark" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-angle-down"></i> What is Bootstrap?</button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body bg-dark">
                                                <p class="text-light">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button type="button" class="btn btn-link btn-block collapsed waves-effect waves-dark" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-angle-right"></i> What is CSS?</button>                     
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body bg-dark">
                                                <p class="text-light">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'public/components/footer.php'; ?>
    <script src="public/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="public/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="public/js/waves.js"></script>
    <script src="public/js/custom.js"></script>
    <script>
        $(document).ready(function(){
        // Add down arrow icon for collapse element which is open by default
        $(".collapse.show").each(function(){
            $(this).prev(".card-header").find(".fa").addClass("fa-angle-down").removeClass("fa-angle-right");
        });
        
        // Toggle right and down arrow icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-angle-right").addClass("fa-angle-down");
        }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    });
</script>
</body>

</html>