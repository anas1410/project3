<?php

include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';


 ?>
  
  <?php include './part/haeder.php';?>

 
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <img id="img" src="./images/anas1.jpg"/>
        <h1 class="display-4 fw-normal">اربح مع انس </h1>
        <p class="lead fw-normal">باقي على فتح التسجيل .</p>
        <h4 id="countDown"></h4>
        <p class="leaD fw-normal">للسحب على ربح نسخة مجانية من برنامج .</p>
       
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block">
        </div>
   

      <div class="container">
        <h3>للدخول في السحب اتبع التالي </h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">استعد للربح مع انس ضمن البث القادم </li>
            <li class="list-group-item">سيتم اختيار الفائز بشكل عشوائي</li>
            <li class="list-group-item">ستكون هناك اسئلة بداخل البث </li>
            <li class="list-group-item">ومن يمكنه الاجابة على هذه الاسئلة </li>
            <li class="list-group-item">سيتم اختياره للفوز ببرنامج كامتازيا </li>
        </ul>   
</div>
 </div>
 
       


 <div class="position-relative overflow-hidden text-center ">
<div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخل معلوماتك </h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول </label>
    <input type="text"  name="firstName" id="firstName" class="form-control"  >
    <div  class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير </label>
    <input type="text" name="lastName" id="lastName" class="form-control"  >
    <div  class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">الايميل </label>
    <input type="text"  name="email" id="email" class="form-control"  >
    <div  class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary" >ارسال المعلومات</button>
</form>
</div>
 </div> 


   

<!-- 
  <form action="index.php" method="POST">
        <input type="text" name="firstName" id="firstName" placeholder="firstName"/> 
        <input type="text" name="lastName" id="lastName" placeholder="lastName"/> 
        <input type="text" name="email" id="email" placeholder="email"/> 
        <input type="submit" name="submit" value="send"> 
</form>  -->






<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary" >
اختيار الرابح 
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user):?> 
        <h5 class=" display-3 text-center modal-title " id="modalLabel"><?php echo htmlspecialchars($user['firstName']).' '.  htmlspecialchars($user['lastName']); ?></h5>
        <?php endforeach; ?> 
   
      </div>
    </div>
  </div>
</div>

 
<div id="cards" class="row mb-5 pb-5">
     
      <div class="col-sm-6">
      <div class="card my-2 bg-light">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"><?php echo htmlspecialchars($user['email']); ?></p>
  </div>
  </div>
  </div>
 
     </div>
     </div> 

<?php  include './part/footer.php' ; ?>
      


    

