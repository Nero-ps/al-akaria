<?php include 'header.php' ?>

  <main class="jobs-page">
    <div class="intro-about intro-projects intro-jobs position-relative text-white text-center d-flex flex-column justify-content-center">
      <div class="container position-relative">
        <h2 class="fw-bold">نحن نبحث عن مواهب استثنائية</h2>
      </div>
    </div>
    <div class="form-jobs py-80">
      <div class="container">
        <h2 class="text-center mb-5">انضموا إلى اسرة <span>العقارية</span></h2>
        <form>
          <div class="row">
            <div class="col-md-6 mb-4">
              <label class="form-label">الاسم الاول <i class="fa-solid fa-star-of-life"></i></label>
              <input type="text" class="form-control" required placeholder="الاسم الاول">
            </div>
            <div class="col-md-6 mb-4">
              <label class="form-label">المدينة <i class="fa-solid fa-star-of-life"></i></label>
              <input type="text" class="form-control" required placeholder="المدينة ">
            </div>
            <div class="col-md-6 mb-4">
              <label class="form-label">البريد الإلكتروني  <i class="fa-solid fa-star-of-life"></i></label>
              <input type="email" class="form-control" required placeholder="البريد الإلكتروني ">
            </div>
            <div class="col-md-6 mb-4">
              <label class="form-label">رقم الجوال   <i class="fa-solid fa-star-of-life"></i></label>
              <input type="number" class="form-control" required placeholder="رقم الجوال  ">
            </div>
            <div class="col-md-6 mb-4">
              <label for="formFile" class="form-label">تحميل السيرة الذاتية <i class="fa-solid fa-star-of-life"></i></label>
              <input class="form-control" required type="file" id="formFile">
              <span class="notes d-flex align-items-center gap-1 mt-1"><i class="fa-solid fa-circle-exclamation"></i>يمكن تحميل المستندات بصيغة PDF فقط ، بحد أقصى لحجم الملف 10 ميغابايت.</span>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary" >إرسال</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>

<?php include 'footer.php' ?>