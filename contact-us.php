<?php include 'header.php' ?>

  <main class="contact-page">
    <div class="intro-about position-relative text-center d-flex flex-column justify-content-center">
      <div class="container position-relative">
        <h2 class="fw-bold">كن على تواصل معنا</h2>
      </div>
    </div>

    <div class="contact-form py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mt-5">
            <div class="contact-info mb-3">
              <label class="d-block">البريد الإلكتروني</label>
              <span class="d-block">Info@Al-akaria.com</span>
            </div>
            <div class="contact-info mb-3">
              <label class="d-block">نسعد بتواصلك</label>
              <span class="d-block">الشركة العقارية السعودية ص.ب 3572 الرياض 11481</span>
            </div>
            <div class="contact-info mb-3">
              <label class="d-block">تواصل معنا عبر الرقم</label>
              <span dir="ltr">92 000 3938</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-us">
                <h2 class="text-center mb-5">بتواصلك نسعد</h2>
                <form>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label class="form-label">الاسم الاول <i class="fa-solid fa-star-of-life"></i></label>
                      <input type="text" class="form-control" required placeholder="الاسم الاول">
                    </div>
                    <div class="col-md-6 mb-4">
                      <label class="form-label">اسم العائلة  <i class="fa-solid fa-star-of-life"></i></label>
                      <input type="text" class="form-control" required placeholder="اسم العائلة  ">
                    </div>
                    <div class="col-md-6 mb-4">
                      <label class="form-label">الدولة   <i class="fa-solid fa-star-of-life"></i></label>
                      <input type="text" class="form-control" required placeholder="الدولة   ">
                    </div>
                    <div class="col-md-6 mb-4">
                      <label class="form-label">رقم الجوال   <i class="fa-solid fa-star-of-life"></i></label>
                      <input type="number" class="form-control" required placeholder="رقم الجوال  ">
                    </div>
                    <div class="col-md-6 mb-4">
                      <label class="form-label">البريد الإلكتروني  <i class="fa-solid fa-star-of-life"></i></label>
                      <input type="email" class="form-control" required placeholder="البريد الإلكتروني ">
                    </div>
                    <div class="col-md-6 mb-4">
                      <label class="form-label">نوع الرسالة   <i class="fa-solid fa-star-of-life"></i></label>
                      <select class="form-select">
                        <option selected value="مقترحات">مقترحات</option>
                        <option value="شکاوی">شکاوی</option>
                        <option value="استفسارات">استفسارات</option>
                        <option value="أخرى">أخرى</option>
                      </select>
                    </div>
                    <div class="col-md-12 mb-4">
                      <label class="form-label">الرسالة  <i class="fa-solid fa-star-of-life"></i></label>
                      <textarea class="form-control" required placeholder="الرسالة"></textarea>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary w-100" >إرسال</button>
                      <span class="notes d-flex align-items-center gap-1 mt-2"><i class="fa-solid fa-circle-exclamation"></i>بإرسال النموذج، فإنك تؤكد موافقتك على سياسة الخصوصية الخاصة بالعقارية.</span>

                    </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php include 'footer.php' ?>