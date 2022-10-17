<?php include("assets/php/header.php"); ?>
     <div class="container header">
         <div class="jumbotron">
            <div class="header-content mt-4">
             <h2 class="display-2"><?php
			$name = json_decode(file_get_contents('./config.json'));
			echo htmlspecialchars($name->sitetitle); ?></h2>
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut unde quaerat consequatur?</p>
             <a href="login.html" class="btn btn-primary">Get Started</a>
            </div>
         </div>
     </div>

     <div class="container features">
         <h2 class="text-center mb-4">Our Speciality</h2>
         <div class="row">
             <div class="col-md-4 col-sm-12 p-2 shadow-sm text-center spec">
                 <i class="fas fa-tablet-alt fa-2x mb-2"></i>
                 <h4>Device Compatible</h4>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, doloremque voluptatum. Ducimus.</p>
             </div>
             <div class="col-md-4 col-sm-12 shadow-sm text-center spec">
                 <i class="fas fa-cloud fa-2x mb-2"></i>
                <h4>Cloud Support</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, doloremque voluptatum. Ducimus.</p>
             </div>
             <div class="col-md-4 col-sm-12 shadow-sm text-center spec">
                <i class="fas fa-phone fa-2x mb-2"></i>
                <h4>24/7 Call Support</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, doloremque voluptatum. Ducimus.</p>
             </div>
         </div>
     </div>

    <div class="container products">
        <h2 class="text-center mb-4">Our Products</h2>
        
        <div class="row mt-4 p-4">
            <div class="col-md-5 col-sm-12">
                <img src="https://images.unsplash.com/photo-1501959181532-7d2a3c064642?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9ffb47d2c8a236bae5e5bb86b2c400b9&auto=format&fit=crop&w=1070&q=80" style="height: 100%;width: 100%;" alt="product-image" class="shadow-lg">
            </div>
            <div class="col-md-7 col-sm-12 mt-sm-4" style="display:flex;align-items:center;">
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nobis officiis unde necessitatibus esse alias expedita quia doloremque assumenda. Cupiditate nam exercitationem voluptatem quidem ad dolore ullam aliquid culpa ducimus qui, ut dignissimos inventore veniam!</p>
            </div>
        </div>
        <div class="row mt-4 p-4 hide-on-sm">
            <div class="col-md-7 col-sm-12 mt-sm-4" style="display:flex;align-items:center;">
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nobis officiis unde necessitatibus esse alias expedita quia doloremque assumenda. Cupiditate nam exercitationem voluptatem !</p>
            </div>
            <div class="col-md-5 col-sm-12">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a20bc6324f6ef2969d9a7cae56b8d4d1&auto=format&fit=crop&w=1050&q=80" style="height: 100%;width: 100%;" alt="product-image" class="shadow-lg">
            </div>
        </div>
        <div class="row mt-4 p-4">
            <div class="col-md-5 col-sm-12">
                <img src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=dfd2ec5a01006fd8c4d7592a381d3776&auto=format&fit=crop&w=800&q=80" style="height: 100%;width: 100%;" alt="product-image" class="shadow-lg">
            </div>
            <div class="col-md-7 col-sm-12 mt-sm-4" style="display:flex;align-items:center;">
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nobis officiis unde necessitatibus esse alias expedita quia doloremque assumenda. Cupiditate nam exercitationem voluptatem quidem ad dolore ullam aliquid culpa ducimus qui, ut dignissimos inventore veniam!</p>
            </div>
            </div>
            
            <div class="text-center"><a href="#" class="btn btn-default text-center">View more</a></div>
    </div>

    <div class="container">
        <h2 class="text-center mb-4">Our Customers</h2>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                        <div class="row mt-4 p-4">
                            <div class="col-md-5 col-xs-12 mt-sm-2">
                                <img src="https://images.unsplash.com/photo-1497215842964-222b430dc094?ixlib=rb-0.3.5&s=76fbdf2a268252eb9d7c7dbd55f445dc&auto=format&fit=crop&w=1050&q=80" style="height: 100%;width: 100%;" alt="product-image">
                            </div>
                            <div class="col-md-7 col-xs-12" style="display:flex;align-items:center;">
                                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit.nam exercitationem voluptatem quidem ad dolore ullam aliquid culpa ducimus qui, ut dignissimos inventore veniam!<br>
                                <cite class="small">~ George Henry, <span class="text-muted">Lead Engineer Fast Labs</span></cite></p>
                            </div>
                        </div>
                </div>
                <div class="carousel-item">
                        <div class="row mt-4 p-4">
                            <div class="col-md-5 col-xs-12">
                                <img src="https://images.unsplash.com/photo-1434626982825-b030fb94f5be?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=862c021c4fa3b0255cc666fafc5dbfdc&auto=format&fit=crop&w=1053&q=80" style="height: 100%;width: 100%;" alt="product-image">
                            </div>
                            <div class="col-md-7 col-xs-12 mt-sm-2" style="display:flex;align-items:center;">
                                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nobis officiis unde necessitati fafe gnissimos inventore veniam!<br>
                                <cite class="small">~ John Anderson, <span class="text-muted">CTO Acme Tech.</span></cite></p>
                                <!-- <blockquote class="blockquote text-left">
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea magnam, possimus sed ex deleniti facere? Quidem dignissimos blanditiis ut sequi accusantium necessitatibus. Aperiam?</p>
                                    <footer class="blockquote-footer"> <cite title="Source Title">Source Title</cite></footer>
                                </blockquote> -->
                            </div>
                        </div>
                </div>
                <div class="carousel-item">
                        <div class="row mt-4 p-4">
                            <div class="col-md-5 col-xs-12">
                                <img src="https://images.unsplash.com/photo-1525332193053-dee9e7348624?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a171c64a1cb121a923c4e95d8308ca9e&auto=format&fit=crop&w=1050&q=80" style="max-height: 100%;max-width: 100%;" alt="product-image">
                            </div>
                            <div class="col-md-7 col-xs-12 mt-sm-2" style="display:flex;align-items:center;">
                                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nobis officiis unde necessitatibus esmos inventore veniam!<br>
                                <cite class="small">~ Ishaan Sheikh, <span class="text-muted">CEO Sigma Inc.</span></cite></p>
                            </div>
                            </div>            
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container-fluid bg-primary p-4 mt-4 last-sec">
        <div class="text-center">
            <h2 class="display-4 text-white">Ready to get started</h2>
            <a href="login.html" class="btn btn-dark btn-lg mt-2">Try it for free</a><br>
        </div>
    </div>


     
<!-- <div style="height: 500px;"></div> -->
<?php include("assets/php/footer.php"); ?>
</body>
</html>
