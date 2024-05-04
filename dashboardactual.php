<!DOCTYPE html>
<html lang="en">
<head>
  <title>AccessAid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="styling.css">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
  <style>
    nav{
    background-color:#f08812 ;
    font-size: larger;
    font-weight: 700;
    color: white;
}
#about{
    /*font-family:Georgia, 'Times New Roman', Times, serif;*/
    font-style: normal;
    padding:20px;
}
.detel{
    text-align: center;
    margin-left: 0%;
    margin-top: 6%;
    padding-top: 25px;
}
.detel h1{
    font-size:50px;
    color:rgb(151, 31, 31);
    margin-bottom: 30px;

    
}
.detel p{
    font-size: 30px;
    color:  #f08812;
}
.navbarScroll.navbarDark {
    background-color: rgba(0, 0, 0, 0.459);
}
#contact {
    padding-bottom: 4rem;
}
.imageAboutPage {
    width: 100%;
} 
.skillsText.card {
    height: 280px;
    cursor: pointer;
    background-color: #000000;
  }
.skillsIcon {
    font-size: 36px;
    text-align: center;
    width: 100%;
    color: #fff;
}
.card-text{
    color:#fff;
}
.card-title {
    text-align: center;
    color: #fff;
}
.card:hover .skillsIcon {
    color: #008000;
}
.skills:hover {
    border: 1px solid #008000;
}
.social-icons {
    font-size: 36px;
    cursor: pointer;
}
/*.fa-facebook:hover,.fa-instagram:hover,.fa-linkedin:hover {
    color: #008000;}*/
.fab {
    color: #000000;
}
#footer {
    background-color:  rgb(134, 129, 129);
    text-align: center;
}
    </style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbarScroll">
        <div class="container">
            <a class="navbar-brand" href="#">AccessAid</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="color: white;margin-right:10px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: white;margin-right:10px;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills" style="color: white;margin-right:10px;">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" style="color: white;margin-right:10px;">Feedback</a>
                    </li>
                </ul>
                <a href="http://localhost/sih/newlogin2.php">Register</a> 
             
            </div>
        </div>
    </nav>

    <section style="background-color:white;">

            <div class="detel">
                <h1> Education ecosystem for specially abled students</h1>
                <p>Becoming capable, competent, and independent<br>
                 emerging from the shadows of<br> exclusion and dependency!</p>
            </div>
            <br>
            <br>
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center" style="text-align:center;color:rgb(151, 31, 31);font-weight :600;">About Us</h1>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <!-- <img src="C:\Users\Lenovo\Documents\shruthi\java\images\image.jpeg" class= "imageAboutPage" alt=""> -->
                    <!-- <img src="" class= "imageAboutPage" alt=""> -->
                    

                </div>

                <div class="col-lg-8 " style="padding-left: 10px;"  >
                    
                    <div class="row mt-3">
                        <div class="col-md-8" style="padding-left: 30px;" >
                      
                                
                                <p style="text-align:center;font-size:larger;color:#f08812;">This website is mainly for inclusion of the specially abled in mainstream society.<br>
                                It provides tutoring sessions for each category of disability, namely Blind, Deaf etc.<br>
                                Additionally,we also provide job counselling for passed out students to provide job opportunities</p>
                       
                            

                    </div>
                </div>
            </div>
    </section>
    <br>
    <section id="skills">
        <div class="container">
            <br><br>
            <h1 class="text-center " style="color:rgb(151, 31, 31)">Choose a Category</h1>
            <div class="row">
                <div class="col-lg-6 mt-4">
                    <div class="card skillsText" style="background-color: rgb(138, 133, 133);">
                        <div class="card-body">
                            <i class='fas skillsIcon fa-wrench'></i>
                            <h4 class="card-title mt-3"><a href="index.html">Blindness</a></h4>
                            <p class="card-text mt-3"  style="color: white;">Blindness is a lack of vision. It may also refer to a loss of vision that cannot be corrected with glasses or contact lenses.
                            </p>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="card skillsText" style="background-color: rgb(154, 149, 149);">
                        <div class="card-body">
                            <i class='fas skillsIcon fa-search'></i>
                            <h4 class="card-title mt-3"><a href="http://localhost/sih/deaf.php" >Hearing impairment</a></h4>
                            <p class="card-text mt-3" style="color: white;">hearing loss refers to hearing loss greater than 35 decibels (dB) in the better hearing ear. Nearly 80% of people with disabling hearing loss live in low- and middle-income countries. </p>
                        </div>
                    </div>  
                </div>

                <!-- <div class="col-lg-4 mt-4">
                    <div class="card skillsText">
                        <div class="card-body">
                            <i class='fas skillsIcon fa-clock'></i>
                            <h4 class="card-title mt-3">Intellectual Disability</h4>
                            <p class="card-text mt-3">Intellectual disability involves problems with general mental abilities that affect functioning in two areas:intellectual functioning,adaptive functioning </p>
                        </div>
                    </div>  
                </div> -->
            </div>

            <!-- <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card skillsText">
                        <div class="card-body">
                            <i class='fas skillsIcon fa-shield-alt'></i>
                            <h4 class="card-title mt-3">Dyslexia</h4>
                            <p class="card-text mt-3">Dyslexia is a learning disability that disrupts how your brain processes written language. People with dyslexia have trouble with reading and related skills</p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card skillsText">
                        <div class="card-body">
                            <i class='fas skillsIcon fa-wrench'></i>
                            <h4 class="card-title mt-3"> Autism Spectrum Disorder</h4>
                            <p class="card-text mt-3">Autism spectrum disorder (ASD) is a neurological and developmental disorder that affects how people interact with others, communicate, learn, and behave </p>
                        </div>
                    </div>  
                </div>
            </div> -->
        </div>
    </section>
    <br>
    <br><br>
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center" style="color: rgb(151, 31, 31)">Feedback</h1>
            <br><br>
            <div class="row">
                  <div class="col-lg-3"></div>
                <div class="col-lg-6" style="text-align:center;">
                    <form action="/dpc/index.php" method="post">
                        <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Name"> <br>
                        <input type="email" name="email" class="form-control lg" id="email" placeholder="Email"> <br>
                        <input type="tel" name="phone number" class="form-control lg" id="phone number" placeholder="Phone number">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" name="feedback" rows="5" id="feedback" placeholder="Feedback"></textarea>
                        </div>
                    </form>
                    <button type="button" class="btn btn-success mt-3" style="background-color: green;">Submit</button>
                    
                </div>
            </div>

            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container-fluid">
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <script>
        // add class navbarDark on navbar scroll
const header = document.querySelector('.navbar');
console.log(header)
window.onscroll = function() {
    const top = window.scrollY;
    if(top >=100) {
        header.classList.add('navbarDark');
    }
    else {
        header.classList.remove('navbarDark');
    }
}
// collapse navbar after click on small devices
const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('navbarSupportedContent')

navLinks.forEach((l) => {
    l.addEventListener('click', () => { new bootstrap.Collapse(menuToggle).toggle() })
})
    </script>


</section>

</body>
</html>
