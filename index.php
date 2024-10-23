<?php

include('dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elearning - Elearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/all.min.css">
    <script src="./js/all.min.js"></script>
</head>

<body>
    
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>E-learning</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="adminlogin.php" class="nav-item nav-link">Admin</a>


            </div>
            <!-- <a href="studentprofile.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">My Profile<i class="fa fa-arrow-right ms-3"></i></a> -->
            <a href="form.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Sign In<i class="fa fa-arrow-right ms-3"></i></a>
                <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></i></a>  
        </div>
    </div>
</div>
</nav>
    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">The Best Online Learning Platform</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Providing interactive online courses for diverse learners to enhance their skills and knowledge.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read more</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight" data-bs-toggle="modal" data-bs-target="#exampleModal">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">Get Educated Online From Your Home</h1>
                                <p class="fs-5 text-white mb-4 pb-2">A convenient and flexible option to gain education and skills remotely, allowing learners to study from the comfort of their home.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div> 
<div class="col-sm-10 col-lg-8">
<T6VAwZopVbZycMMU4S2A6igBoilulOIbfJHOds9Kcqq9CKWto1M656eNBIsLe3RM8i588Z/1rRVBYZBxUld2sTxj2dxG3+IbGmdxZajZw9rJbtJEdy8PeA+NDBImeF9OtdU1ZLbtZIgRkP3Sc1a9RvRaySaJxNZR3UAxguvVT0ZT1HxFc107VRBdxvESjjdSfOuqWlxDx5oMlkWSLV7dCbd3P9XkT+E9DQNr8+FJ4q4LjtbVtV4dma701e9NGd5LceZ819apWfKuhcD8QnSNYe11FTHGzGC6gfopzg5qB484Z93dUDwMsunXZZ7WRfIdVI8CuR8RQhZRrwjtK1q40yKZYccs3LkF2HTPgDv1rZbaXULe8vjPCjQ8pZGYBnB27o8cVEqdx41YYNM0+GxWXU7oQ3EozFGQxJHxHQep8c7YG9ibeiqSS2RMKtOvZxqSw3wKl7fVP4PPbpZrF2lvJztcAZZ28Vz4qMY+OfSm08J0ZnbIM8ndi/wr4sfXwHzPlUUZMBj50KXVkOKkjuPu/wAJ8X2Md1GqpKd2khblbm8c4/vSsPCvDXC9hdXSwi5dY2JaZubIG/8AzFcSs9QubKQNaXEsTecb4+tKXur6hqAxdXc0qjwd9vpV3yxM39efnbRP69djX7V54pnE0cvcswu3ZEbuPnsR5b+FQdr3Jcj7kK4Hqx8fqa0sZ5o5kNvjtAdm8B/6qS1GBfZEurRCsDkhh+F/EfDy9PhVbfbZdFKK6kNekPgLnI3IrD6hdPp6WDzFrWNy6R4GFY9T50pb2M97Bd3MTR8tqgkkBcKcE/0jx3pvDOYXD4HMviQG6jHSq9lyLLwxdwzWz2d2vMjRdnKn4485DD1U0x1Phq+si0ttG11anZJ4RzbeoHQ/GoVJ3imEkTFWU5VgelWKLjXU7TUvb7Ls7RyABHAuFGFAP1xn51Z2i1UitxkncSzcJa5rj8M3nD93pjXNlJGViuLoFEgz5kjceIA32qG4rk0nStNttM0WR5WMQNzK39bnqQPLGwprrHHmuazCkV5cllU5UeGfhVXkZncu7FmbckneiU0loiONt3I1J3rFZrBqkvF4bYud6lbdFgTZQCaXhtgD0rNzGQuFFADKZwWxtQCCKaTsytuCKwkjEYH+tQFDlnVawkjvII4lZpG+6qAkk+gotYIpXBmnAXO4SrhpF/o2kW5ePsonIwXO7H+/0qSUiJs+HuIbqCSaOwkWKNC7GVgn0B3zS2n3+o6feW8V7FLDCHH30IDfPoaf6r9omLU2mmwcwb78sm2fQCqxf8S6hqarDcFOzyMALnHwoJR2250zhiDSp7+4sbCO3mjLSOYlGSR5+dcf4T1JrPXYJYHIjFwFGTuUJwAakLvXWfgCfTLwczSXCCAt1BU5LfDGR86p1vcvbyrIm5Ug9fKhuwjp7LN9pqPbcdam6jsxKySKRtkFRv8AXNV++1S81BII724kmS3QrErHZB6U64p12XiLVmv54liJRUCKc4AqIoI/wyDggjr4V1DSdDu9RmvLloVu4Wgt1DNg7tGj9D/mP1rlwO4q8cM65qTafDa6dqq2lzb838u4b+VJHjO2xIbw2xt41biauijMnVoh9ahb+F2DT84ukLwypIpDIVJAB/7ahGYFgD09KsfGl729/wjAHqfWnPGh17QtWin/jd3dtc26TysysORj1VlO22PpVnWNbK+8rpFOvNOuLUo0gV4pPuSxnmRvPB/tTQ9f9Ku+nXdtrdncc1tGl1y81xFGMLOo/rUDow/541UtSszZXUkJbmXZkb8ancH6UkoUrQ8J22n6badfiyaYm2gnEsZQiZc8ufEeR9aZnrt0rFFI2PQUUUVBJeLeDmPSt7+OCztzNcHCjp5k+lLXFzb6dD21wwVegA6k+QqmarqUupXJlk7qDZE8h/vUsgSvrprpy3KEXOyimvxrNFQMGKKKKCAz8KBsazRQA4u76e7igilKhIAQgUY6nJJ9abHes0UBZrRWaKAMUrb3M1tJ2kEhR8Ecw64IwaTrFFgbySPKxaRizHqSck07tbW2lsLmeW8WOeIryQMpzKD1wfDFMayDUgbAeRzWMHyNYNHM34j9agB1pt7Lp97FdW6I0kZyokQMp+IPWtJnLySPJgFyThRjcnNIF2/E31rO58MmpsKLhBMLa00rWeR3Szu0LgdMFcj59wius8Zy3mpGzt9Md4rhoBKtxgcse45g+eoIP1Fcb4bv1a1udKumPs1woEiAZ2ByGH+JSSfgTUnxDr2tfxPS31JGWKybuT2TFO2jJXowOxwv161pjJVZknBt0TPGfY6HxFw9I0kU4Kf8AyZkjVO0BfDZ5R+GqrxvNp/tPslnasrQyPyTtISXiLEqpXwIOd/WpVLm54n4kS/uDPJpNnL2/NcKoMa5DdmWA3yRgDeq3xbexX+vXVzbxiOJnPKg6KM5x+9LklUWTjX3X7Iaiiis5qCisVmgBzfX099N2tw+T4AdF+FNq9ee4PCP5c039OtHuDwj+XNN/TrUEnkOgV689weEfy5pv6daPcHhH8uab+nWgDyJRXrv3B4R/Lmm/p1o9weEfy5pv6daAPIlFeu/cHhH8uab+nWkrngjgy1geafh7TVjTqRbA/sBmgijyTRXqUaBwFiUPoGnrJFzFkNmc4VguRtuMkfX0NYXQ/s+H/V0GxiY5IWWxZSwABJAK+tAUeW6xXqluHeAg/KeH7Loe97A2M55cfd658PQ1m34a4EubqO3h0HTGMiF0b2bAcA4JG249RtQFHlWivVLcPfZ+gUtoen4cZU+xHveWO7vkbjzAJ6U5t+D+CLqNHg0HTGDlgoNsATynfYjNBJ5NxWMV6p92eDBGZPdS1x2TSYNsnRW5WHXGQaa/wrgHn5Rw1aZ5uXa1Q77+Gc526dcb4xQB5gor1JFoPA8sZkj4YsW7vMAIIzzbgHGDvjIyRt61ueHuCFvxZScMWSTGQR726YyemN989dt8dehoA8sVkMR0Neu/cHhH8uab+nWj3A4R/Lmm/p1oA8jRSPE6yRtyspyCKtelcUrFYTCeR1uF5ezi5Q0cu/ezkd016O9wOEfy5pv6daPcDhH8uab+nWmjNx8EnjjP086a5x/qmrWIsQkFtbbZjhQKGPgdgP71T2OTkmvXnuDwj+XNN/TrR7g8I/lzTf060OTfpMYRj4eQ6K9ee4PCP5c039OtHuDwj+XNN/TrSjHkOsV699weEfy5pv6daPcHhH8uab+nWgCyUUUUAFFFFABRRRQA
    <!-- Carousel End -->


         <!-- Carousel Start -->
                  
    <!-- Service Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Skilled instructors bring a wealth of experience and expertise to their subjects, offering personalized guidance and in-depth knowledge to help learners.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Interactive platforms, students can engage with skilled instructors and peers, participate in real-time discussions, access a wide range of learning resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Engaging and hands-on activities designed to be completed at home, encouraging creativity, practical skills, and real-world application of knowledge.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>A curated collection of books offering a wide range of genres and subjects, available for borrowing or reference to support learning and leisure reading.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Service End -->


    <!-- About Start
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to eLEARNING</h1>
                    <p class="mb-4">Welcome to our eLearning platform! We are dedicated to providing high-quality, accessible education that empowers learners from all backgrounds.</p>
                    <p class="mb-4">Our mission is to foster a dynamic learning environment through engaging courses led by expert instructors, enabling you to achieve your personal and professional goals from anywhere. Join us to experience a new era of education where learning is flexible, interactive, and tailored to your needs.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <!-- <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Categories End -->

    <!-- Courses Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>

                <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <a href="">
                            <img class="img-fluid" src="./img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="./coursedetails.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">5,000</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Freelancing</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Hisham Sarwar</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>24 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>91430 </small>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="./coursedetails.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                               
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">10,000</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Digital Marketing</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Usman Latif  </small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>24 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>32698</small>
                        </div>
                    </div>
                </div> 
               
               
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-3.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="./coursedetails.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">8,000</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Graphic Design</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Rafay Anwer Siddiqi</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>24 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>29123 </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="text-center m-2">
        <a href="./courses.php" class="btn btn-primary py-3 px-5 mt-2">View All Courses</a>
    </div> -->
    <!-- Courses End -->


    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Hisham Sarwar</h5>
                            <small>Masters of Science</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ayesha Fazlur Rahman</h5>
                            <small>Communication Design with Distinction</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <!-- </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Syed Umair Ali</h5>
                            <small>M.SC Mass Communication</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Amena Aly Kamaal </h5>
                            <small>MS in Communication Studies</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->

 
    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sarah Johnson</h5>
                    <p>Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The e-learning platform is fantastic! The courses are well-structured, and the interactive quizzes help reinforce what I've learned. The user interface is also easy to navigate.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Rafael Silva</h5>
                    <p>Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The video lectures are very clear and informative. I appreciate the additional resources provided with each lesson, which help deepen my understanding of the topics.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ahmed El-Sayed</h5>
                    <p>Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">A great platform for online learning! The courses are comprehensive, and the instructors do a great job of breaking down complex topics into easy-to-understand lessons.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Maria Gonzalez</h5>
                    <p>Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The learning experience has been very positive. The courses are well-curated, and the certification upon completion is a great addition to my resume. Highly recommend it!</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <!-- <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>House Ali Street Samundri</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+923472685928</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Subscribe to receive curated articles, upcoming course highlights, and tips.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <a href="form.php"><button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"> SignUp</button> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">eLEARNING</a>, All Right Reserved.

                
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Academy</a><br><br>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --> 
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

 
  
 
    <!-- Button trigger modal -->
  
  <!-- Modal
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div  class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">SignUp Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="stulogoutform">
                <div class="mb-3">
                    <label for="fname" class="p1-2 font-weight-bold">FirstName</label><input type="text" class="form-control" placeholder="type your firstname" name="fname" id="fname"></div>
                <div class="mb-3">
                    <label for="lname" class="p1-2 font-weight-bold">LastName</label><input type="text" class="form-control" placeholder="type your lastname" name="lname" id="lname"></div>
<div>
                  <label for="Email1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="Email1" name="email" placeholder="your email address" aria-describedby="emailHelp">
                  <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="Password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="Password" name="Password" placeholder="Enter password">
                </div>
                <div class="mb-3">
                  <label for="Cpass" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="Cpass" name="Cpass" placeholder="Re-enter password">
                </div>
              </form> -->
        <!-- </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="signinbutton">Sign Up</button>
        </div>
      </div>
    </div>
  </div> -->


    <!-JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/ajaxreq.js">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</body>

</html>