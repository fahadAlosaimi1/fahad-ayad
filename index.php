<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>


<div class="position-relative text-center ">
<div class="col-md-5 p-lg-5 mx-auto ">
    <img src="images/cup.jpg" alt="">
      <h1 class="display-4 fw-normal">اربح مع فهد</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
    
</div>
</div>
<h3>للدخول في السحب الرجاء اتباع مايلي :</h3>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على فيسبوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">ببث مباشر عبارة عن أسئلة وأجوبة حرة للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وأيميلك</li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>


<div class="position-relative  text-center">
<div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="index.php" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName"  class="form-control" id="exampleInputEmail1" value="<?php echo $firstName ?>" >
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameerror'] ?> </div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" value="<?php echo $lastName ?>" >
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameerror'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الاكتروني</label>
    <input type="text" name="email"  class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>" >
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailerror'] ?></div>
  </div>


  <button type="submit" name="submit"  class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
</div>




<div class="loder-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>





<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button"  id="winner" class="btn btn-primary" >
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">الرابح في المسابقة </h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($userss as $user): ?>
        <h1 class="display-4 text-center modal-title" id="exampleModalLabel"><?php echo htmlspecialchars($user['firstName']) . '  ' . htmlspecialchars($user['lastName']); ?> </h1>
        <?php endforeach; ?>
      </div>
      </div>
    </div>
  </div>
</div>



<?php include_once './parts/footer.php'; ?>