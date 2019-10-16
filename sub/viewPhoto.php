<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../Bootstrap/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../Css/Styles.css">
  <title>PadaShala & GoShala</title>
</head>
<?php $page='photogallery'; include '..\header.php'; ?>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3 auto text-center">
                               <img  class="img-fluid p-2 p-sm-3 " src="../Images/e7.jpg"    alt="">
                               <h5>Vijaya Dasami</h5>



            </div>
            <div  class="col-md-3 auto text-center">
                               <img   class="img-fluid p-2 p-sm-3 "  src="../Images/e7.jpg" alt="">
                               <h5>Vijaya Dasami</h5>
                              

            </div>
            <div class="col-md-3 auto text-center">
                               <img  id="myImg3" class="img-fluid p-2 p-sm-3 myImg"  onclick="sendimg(this.id);"  src="../Images/e7.jpg" alt="">
                               <h5>Vijaya Dasami</h5>
                              

            </div>
             <div class="col-md-3 auto text-center">
                               <img   id="myImg4" class="img-fluid p-2 p-sm-3" src="../Images/e7.jpg" alt="">
                               <h5>Vijaya Dasami</h5>
                              

            </div>
           
        </div>
    </div>
    <div class="modal fade" role="dialog" id="zmodal">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  <div class="modal-content">
    <img src="" id="model-img" height="100%" width="100%">
  </div>
</div>

</div>
 

</section>


<script src="../Bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src="../Bootstrap/popper.min.js"></script>
    <script src="../Bootstrap/bootstrap.min.js"></script>
    <script>
  $(document).ready(function(){
    alert("loaded");
    $('img').on('click',function(){
    var src=$(this).attr('src');
    $("#model-img").attr('src',src);
    $("#zmodal").modal('show');
  })

  });
 
  </script>
</body>
