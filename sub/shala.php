<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../Bootstrap/fontawesome/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Cookie|Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <link rel="stylesheet" href="../Css/Styles.css?v=<?php echo time(); ?>">
  
<title>PadaShala & GoShala</title>
</head>
<?php $page='shala'; include '..\header.php'; ?>
<body>
  <section>
    <div class="container mt-5 mb-5 p-5 ">
      <div class="row card1 ht mt-5 p-5">
        <div class="col-6">
          <img class=" img-fluid"src="../Images/shala.jpg" alt="">
        </div>
       <div class="col-md-6">
         <h3>Padashala</h3>
         <p>Veda Padashala – Gurukulam method along with other subjects to meet the education standards of Shishyas.</p>
       </div>
      </div>
      <div class="row card1 ht mt-5 p-5">
      <div class="col-md-6">
     
          <img class=" img-fluid"src="../Images/shalgo.jpg" alt="">
        </div>
       <div class="col-md-6">
       <h3>Goshala</h3>
       <p>Goshala – To take care of abandoned cows.</p>
       
       </div>
      </div>

    
    </div>
</section>
<footer>
            <section>
                <div class="container">
                  <div class="row ">
                    <div class="col-md-12  text-center ">
                        <h3 class="ml12">Contact Us</h3>
                    </div>
                  </div>
                 
                    <div class="row align-items-center pt-3  text-center  ">
                      <div class="col-md-3 text-center ">
                          
                          <img class="img-fluid " src="../Images/boss.png" alt="">
                         <div>
                            <a class="fa fa-envelope pr-3"  style="color:black" href="mailto:rajaguru2697@gmail.com">UIVS@gmail.com</a>
                            <a href="tel:8807692624"  style="color:black"><i class="fas fa-phone">8807692624</i></a><br/>
                         </div>
                      </div>
                      <div class="col-md-6  text-center  ">
                          <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio corporis molestiae architecto necessitatibus pariatur minima! Nulla, adipisci, quod ut et quam, hic accusamus quas natus minima maxime neque illo at.
                          </p>
                          <a style="color: #4C0027" href="#"><i class="fab fa-2x fa-facebook-square p-1"><h5>Facebook</h5></i></a>
                          <a style="color: #4C0027" href="#"><i class="fab fa-2x fa-linkedin"><h5>LinkedIn</h5></i></a>
                          <a  style="color: #4C0027" href="#"><i class="fab fa-2x fa-instagram p-1"><h5>Instagram</h5></i></a>
                          <a  style="color: #4C0027" href="#"><i class="fab fa-2x fa-twitter"><h5>Twitter</h5></i></a>
        
                      </div>
                      <div class="col-md-3">    
                                  
                      <div class="embed-responsive embed-responsive-16by9">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448183.
                          7392416147!2d76.81305348393388!3d28.646677219774674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                          1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1569754640227!5m2!1sen!2sin"  style="border:0;" allowfullscreen=""></iframe>
                          </iframe>
                         
                          
                      </div>
                    </div>
                       
                      </div>
                  </div>
            </section>
            <section>
                <div class="container-fluid " width:100%>
                    <div class="row test" >
                        <div class="col-12 pt-2 text-center">
                            <p >
                              Copyright © 2019 - All rights reserved
                            </p>
                        </div>
                    </div>
                  </div>
            </section>
    </footer>
    <script src="../Bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src="../Bootstrap/popper.min.js"></script>
    <script src="../Bootstrap/bootstrap.min.js"></script>
    <script>// Wrap every letter in a span
var textWrapper = document.querySelector('.ml12');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml12 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });</script>



</body>