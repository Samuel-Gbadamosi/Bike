<?php 
session_start();
include ('functions.php');





$pdo = pdo_connect_mysql();

$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'login';
//include and show the requested page
include $page . '.php';





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="styles.css"> -->
<!-- cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font-awesome -->
</head>
<body>
    <!-- header starts here -->
    <header>
        <div class="head">
            <!-- jumbotron section -->
            <div class="top-head">
                <div class="row container">
                    <div class=" col-2 col-md-1">
                        <img src="search-icon.png" alt="">

                    </div>
                    <div class="offset-3 col-3 ">
                        <img class="greg" src="logo (1).png" alt="">

                    </div>
                    <div class="offset-1 col-3  ">
                        <ul class="d-flex justify-content-around mt-4 list-unstyled" style="color: white; font-size: 15px;">
                            <li ><i class="fa-solid fa-user p-1"></i>  Login</li>
                            <img src="bag.png" alt="">
                        </ul>

                    </div>

                </div>

            </div>

            <div class="row ">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row myrole">
                            <div class="offset-2 col-4">
                                <h3>Sports</h3>
                                <h5>Cycle</h5>

                                <p> is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content</p>

                                <button onclick="onMe()" class="buy">Buy Now</button>
                                <button class="buy2 buy">Contact Us</button>
                            </div>
                            <div class="offset-1 col-4">
                                <img class="ora" src="bikeorange.png" alt="">

                            </div>

                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row myrole">
                            <div class="offset-2 col-4">
                                <h3>Sports</h3>
                                <h5>Bikes</h5>

                                <p> is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content</p>

                                <button class="buy">Buy Now</button>
                                <button class="buy2 buy">Contact Us</button>
                            </div>
                            <div class="offset-1 col-4">
                                <img class="ora" src="bikeorange.png" alt="">

                            </div>

                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row myrole">
                            <div class="offset-2 col-4">
                                <h3>Energy</h3>
                                <h5>Cycle</h5>

                                <p> is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content</p>

                                <button class="buy">Buy Now</button>
                                <button class="buy2 buy">Contact Us</button>
                            </div>
                            <div class="offset-1 col-4">
                                <img class="ora" src="bikeorange.png" alt="">

                            </div>

                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


            </div>

        </div>

    </header>
    <!-- header ends here -->
    <!-- main starts here -->
    <main>
        <div class="row">
            <div class="offset-2 col-8">
                <div class="bikey">
                    <ul class="d-flex list-unstyled pt-3">
                        <li>About</li>
                        <p style="margin-left:8px;">Us</p>
                    </ul>

                    <div class="row">
                        <div class="myboxwhite">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it It is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it</p>
                        </div>

                    </div>
                    <div class="row container text-center pt-4">
                        <div>
                            <button class=" crt">Read More</button>


                        </div>

                    </div>


                </div>

            </div>

        </div>

        <section class="sect2">

            <div class="row text-center">
                <h4 style="font-size:20px; font-weight: 700;">Contact Us</h4>

            </div>
            <div class="row mt-5">
                <form class="offset-3 col-6 mt-4" method="post" >
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Phone" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                            <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <div class="row offset-3 col-5 mt-4 ">
                        <button type="submit" class="btn btn-warning mt-3" style="background-color: #F7941E; height: 50px;">Send</button>


                    </div>
                  </form>
                

            </div>


        </section>

        <div class="mysecond text-center pt-4">
            <h5>Testimonial</h5>
            <h6>consectetur adipsiscing elit, sed do euismood tempor incididunt ut labore et dolore magna</p>
                <img src="model1.png" alt="">

                <h3>Rooty</h3>
                <h5>(icc)</h5>


                <div class="row col-md-12">
                    <img src="https://www.free-css.com/assets/files/free-css-templates/preview/page273/speed/assets/images/left-quote.png" alt="">
                    <p class="jop" style="color: black;">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>


                </div>
            

        </div>

    </main>
    <!-- main ends here -->
    <!-- footer starts here -->
    <footer class="pt-4 container-fluid">
        <div class="row pt-4">
            <div class="offset-1 col-3 pt-4 col-md-4">
                <h4>Important Link</h4>
                <ul class="list-unstyled jail">
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Our Latest Event</li>
                    <li>Our Latest Article</li>
                    <li>Join With Us</li>
                </ul>

            </div>
            <div class="col-3 pt-4 col-md-3">
                <h4>Social Link</h4>
                <ul class="list-unstyled jail">
                    <li><i class="fa-brands fa-facebook"></i>Facebook</li>
                    <li><i class="fa-brands fa-linkedin"></i> Linkedin</li>
                    <li><i class="fa-brands fa-twitter"></i> Twitter</li>
                    <li><i class="fa-brands fa-youtube"></i> Youtube</li>
                    <li><i class="fa-brands fa-pinterest"></i> Pinterest</li>
                </ul>

            </div>
            <div class="col-3 pt-4 col-md-4">
                <h4>Subscribe With Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipsiscing elit.Fuga</p>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="text" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                    <span style="background-color:#F7941E;" class="input-group-text" id="basic-addon2" style="border: 2px solid #F7941E;">Subscribe</span>
                  </div>


            </div>


        </div>
        <p class="text-center pt-4">Copyright 2045 All Rights Reserved. ByHTML.Design</p>


        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- footer ends here -->
    <script>

        function onMe(){

            let player = prompt('hello, do you wanna check it out ?');
            if(player == 'yes'){
                alert('why do you wanna join');
                
            }

        
        
      


       


        }
    </script>

    
</body>
</html>