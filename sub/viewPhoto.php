<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../Bootstrap/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../Css/Styles.css">
  <title>PadaShala & GoShala</title>





  <style>


.myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}


/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

</head>
<?php $page='photogallery'; include '..\header.php'; ?>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 auto text-center">
                               <img  id="myImg1" class="img-fluid p-2 p-sm-3 myImg" src="../Images/e7.jpg"  onclick="sendimg(this.id);"  alt="">
                               <h5>Vijaya Dasami</h5>



            </div>
            <div  class="col-md-4 auto text-center">
                               <img  id="myImg2" class="img-fluid p-2 p-sm-3 myImg" onclick="sendimg(this.id);"  src="../Images/e7.jpg" alt="">
                               <h5>Vijaya Dasami</h5>
                              

            </div>
            <div class="col-md-4 auto text-center">
                               <img  id="myImg3" class="img-fluid p-2 p-sm-3 myImg"  onclick="sendimg(this.id);"  src="../Images/e7.jpg" alt="">
                               <h5>Vijaya Dasami</h5>
                              

            </div>
            <!-- <div class="col-md-4 auto text-center">
                               <img   id="myImg" class="img-fluid p-2 p-sm-3" src="../Images/e7.jpg" alt="">
                               <h5>Vijaya Dasami</h5>
                              

            </div>
            <div class="col-md-4 auto text-center">
                               <img  id="myImg" class="img-fluid p-2 p-sm-3" src="../Images/e7.jpg" alt="">
                               <h5>Vijaya Dasami</h5>
                              

            </div>
            <div class="col-md-4 auto text-center">
                               <img  id="myImg" class="img-fluid p-2 p-sm-3" src="../Images/e7.jpg" alt="">
                               <h5>Vijaya Dasami</h5>
                              

            </div> -->
        </div>
    </div>

    <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
function sendimg(a){

var img =document.getElementById(a);
var modalImg = document.getElementById("img01");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
 
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}}
</script>

    
</section>


<script src="../Bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src="../Bootstrap/popper.min.js"></script>
    <script src="../Bootstrap/bootstrap.min.js"></script>
</body>
