
<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta auhtor="mohammed zubair" content="libary">
    <link rel="stylesheet" href="css/ARB.CSS">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/head-footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/quiry.css">
    <title>libary</title>
</head>
<body>
    <!--start header-->
    <header>
        <div class="head1">
            
            <div><a href="#" id="login" onclick="login()"><span> <i class="fas fa-user"></i> ادخل لحسابك او سجل الان</span></a></div>
            <div><a href="#"><span> <i class="fas fa-star"></i>الرئيسية</span></a></div>
            <div><a href="#"><span> <i class="fas fa-truck-moving"></i>من نحن</span></a></div>
            <div><a href="#"><span> <i class="fas fa-phone"></i>اتصل بنا</span></a></div>
            <div><a href="#"><span> <i class="fas fa-info-circle"></i>المساعدة</span></a></div>
            <div><a href="#"><span> <i class="fas fa-user-shield"></i>سياسة الخصوصية</span></a></div>
            <div><a href="#"><span> <i class="fas fa-flag"></i>اليمن YER</span></a></div>
            <div><a href="#" onclick="lange()"><span> English<i class="fas fa-language"></i></span></a></div>

        </div>
        <div class="head2">
            <div>
              <img src=" images/logo.svg" alt="">
            </div>
            <div>
                <input type="search" placeholder="البحث"id="search">
            </div>
            <div>
                
                <div class="crical">
                  <a href="./checkout.php">  <i class="fas fa-shopping-cart" ></i></a>
                </div><span id=counter></span>

            </div>
        </div>
        <div class="head3">
            <P class="timer"><span style="color: yellow;font-size: 20px;">عروض خاصة</span>  <span id="day"> </span> <span> يوم</span><span>-</span><span id="hour"></span ><span>ساعة</span><span>-</span><span id="mint"></span><span>دقيقة</span><span>-</span><span id="second"></span><span>تانية</span></P>
            <div class="head-img">
                <div> <i class="fas fa-arrow-right" onclick="Pv()"></i> </div>
             <img src=" img/adv.jpg" alt="" class="head-imges">
             <div> <i class="fas fa-arrow-left" onclick=" Nt()"></i></div>
                
            </div>

        </div>
        <div class="dot-container">
        <div class="dot-parent" >
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>

        </div>
        </div>
    </header>
    <!--end  header-->
    <!--login-->
    
    <div id="model">
        <div class="model-container">
            <h3 class="form-head">تسجيل الدخول</h3>
            <div class="form-container">
                <input type="email" placeholder="البريد الاكتروني او رقم الجوال" class="form-input">
                <input type="password" placeholder="كلمة المرور" class="form-input">
                <button class="form-button">تسجيل الدخول</button>
               <p class="link-align"> <a href="#" onclick="s_login()"> ليس لديك حساب</a></p>
               <p id="out" class="out">خروج</p>

            </div>

        </div>

    </div>
    <!--end login-->
    <!--start sing up-->
    <div id="model2">
        <div class="model-container2">
            <h3 class="form-head"> انشاء حساب جديد </h3>
            <div class="form-container2">
                <input type="phone" placeholder="رقم الجوال" class="form-input">
                <p>سوف نرسل لك رمز التحقق عن طريق رسالة نصية</p>
                <button class="form-button-sing">  ارسال رمز التحقق </button>
                <input type="text" placeholder="اسم الاول " class="form-input">
                <input type="text" placeholder="اسم العائلة " class="form-input">
                <input type="email" placeholder="البريد الاكتروني   " class="form-input">
                <input type="email" placeholder=" تاكيد البريد الاكتروني " class="form-input">
                <input type="password" placeholder="كلمة السر" class="form-input">
                <div class="check-parent">  
                <input type="checkbox" checked class="check" ><p class="check-p"> اوافق على<a href="#" class="check-a">الشروط والاحكام</a></p>
                </div>
                <div class="check-parent">  
                    <input type="checkbox" checked class="check" ><p class="check-p">
                        التسجيل للانضمام للنشرة البريدية  </p>
                    </div>
                    <button class="form-button-sing"> انشاء حساب </button>
                    <p class="link-align"> <a href="#"> لديك حساب؟<span class="color" onclick="login()">تسجيل الدخول </span></a></p>
                    <p id="out" class="out">خروج</p>

            </div>
            </div>
    </div>
    <h2 class="heading">تصفح حسب القسم</h2>
    <!--start department -->
    <div class="dept-container">
        <div>
            <i class="fas fa-arrow-right "></i>
        </div>
        <div class="dept-name">
            <div class="parent-dept-icon">
                <div class="dept-icon"> 
                  <a href="categorey.php" class="a-acolor"><i class="fas fa-user"></i></a>  

                </div>
            </div>
            <p class="dept-title1">
                دين
            </p>

        </div>
        <div class="dept-name">
            <div class="parent-dept-icon">
                <div class="dept-icon-history"> 
                 <a href="categorey.php" class="a-acolor"> <i class="fas fa-user"></i></a>  

                </div>
            </div>
            <p class="dept-title2">
                تاريخ 
            </p>

        </div>
        <div class="dept-name">
            <div class="parent-dept-icon">
                <div class="dept-icon-story"> 
                  <a href="./categorey.php" class="a-acolor"> <i class="fas fa-user"></i></a> 

                </div>
            </div>
            <p class="dept-title3">
                روايات
            </p>

        </div>
        <div class="dept-name">
            <div class="parent-dept-icon">
                <div class="dept-icon-p"> 
                   <a href="categorey.php" class="a-acolor"> <i class="fas fa-user"></i></a>

                </div>
            </div>
            <p class="dept-title4">
               سياسة 
            </p>

        </div>
        <div class="dept-name">
            <div class="parent-dept-icon">
                <div class="dept-icon-c"> 
                  <a href="./categorey.php" class="a-acolor"> <i class="fas fa-user"></i></a> 

                </div>
            </div>
            <p class="dept-title5">
                اقتصاد
            </p>

        </div>
        <div class="dept-name">
            <div class="parent-dept-icon">
                <div class="dept-icon-cook"> 
                  <a href="./categorey.php" class="a-acolor"><i class="fas fa-user"></i></a>  

                </div>
            </div>
            <p class="dept-title6">
                طبخ
            </p>

        </div>
        <div class="dept-name">
            <div class="parent-dept-icon">
                <div class="dept-icon-e"> 
                  <a href="categorey.php" class="a-acolor">  <i class="fas fa-user"></i></a>

                </div>
            </div>
            <p class="dept-title3">
                تربية
            </p>

        </div>
        <div>
           <a href="categorey.php"><i class="fas fa-arrow-left" ></i></a> 
        </div>





    </div>
    <!--end depatment -->
    <!--star books-->
    <h2 class="heading">العروض الحالية</h2>
    <div class="books-container">
        <div class="arrow-book1 slideRight">
            <i class="fas fa-arrow-right " ></i>
        </div>
        <div class="slider-container-item">
         <a href="./detail.php">  <img src=" img/book1.jpg" alt="" ></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">ابابيل كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt ba"></i>
        </div>
        </div>
        <div class="slider-container-item">
           <a href="./detail.php"> <img src=" img/book2.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">علم التاتير كتاب الاكتروني</p>
            <p class="p-price">55 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
            <a href="./detail.php"><img src=" img/book3.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  الذكاء العاطفي </p>
            <p class="p-price">70 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

     
        <div class="slider-container-item">
          <a href="./detail.php"> <img src=" img/book4.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">من جيد الى عظيم كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        
        <div class="slider-container-item">
          <a href="./detail.php"> <img src=" img/book5.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  اعادة تصميم العمل كتاب الاكتروني </p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
       

        <div class="arrow-book2">
            <i class="fas fa-arrow-left" ></i>
        </div>




    </div>
    <h2 class="heading">الكتب الدينية</h2>
    <div class="books-container">
        <div class="arrow-book1">
            <i class="fas fa-arrow-right" ></i>
        </div>
        <div class="slider-container-item">
          <a href="detail.php"> <img src=" img/book7.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">لانك الله</p>
            <p class="p-price">80 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        <div class="slider-container-item">
         <a href="./detail.php"> <img src=" img/book2.jpg" alt="" id="display-slide"></a>  
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">علم التاتير كتاب الاكتروني</p>
            <p class="p-price">55 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
         <a href="./detail.php"> <img src=" img/book4.jpg" alt="" id="display-slide"></a>  
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">من جيد الى عظيم كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
          <a href="./detail.php">  <img src=" img/book3.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  الذكاء العاطفي </p>
            <p class="p-price">70 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

            <div class="slider-container-item">
         <a href="./detail.php"> <img src=" img/book5.jpg" alt="" id="display-slide"></a>  
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  اعادة تصميم العمل كتاب الاكتروني </p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        <div class="arrow-book2">
            <i class="fas fa-arrow-left" ></i>
        </div>
        



    </div>
    <h2 class="heading">الكتب التاريخية</h2>
    <div class="books-container">
        <div class="arrow-book1">
            <i class="fas fa-arrow-right" ></i>
        </div>
        <div class="slider-container-item">
        <a href="./detail.php">   <img src=" img/book1.jpg" alt="" ></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">ابابيل كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt ba"></i>
        </div>
        </div>
        <div class="slider-container-item">
           <a href="./detail.php"> <img src=" img/book2.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">علم التاتير كتاب الاكتروني</p>
            <p class="p-price">55 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
         <a href="detail.php">   <img src=" img/book3.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  الذكاء العاطفي </p>
            <p class="p-price">70 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

     
        <div class="slider-container-item">
           <a href="detail.php"><img src=" img/book4.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">من جيد الى عظيم كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        
        <div class="slider-container-item">
          <a href="./detail.php"><img src=" img/book5.jpg" alt="" id="display-slide"></a>  
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  اعادة تصميم العمل كتاب الاكتروني </p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        <div class="arrow-book2">
            <i class="fas fa-arrow-left" ></i>
        </div>



    </div>
    <h2 class="heading">السياسة</h2>
    <div class="books-container">
        <div class="arrow-book1">
            <i class="fas fa-arrow-right" ></i>
        </div>
        <div class="slider-container-item">
          <a href="detail.php"> <img src=" img/book7.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">لانك الله</p>
            <p class="p-price">80 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        <div class="slider-container-item">
          <a href="detail.php"> <img src=" img/book2.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">علم التاتير كتاب الاكتروني</p>
            <p class="p-price">55 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
          <a href="detail.php">  <img src=" img/book4.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">من جيد الى عظيم كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
          <a href="detail.php"> <img src=" img/book3.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  الذكاء العاطفي </p>
            <p class="p-price">70 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

            <div class="slider-container-item">
         <a href="detail.php"> <img src=" img/book5.jpg" alt="" id="display-slide"></a>  
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  اعادة تصميم العمل كتاب الاكتروني </p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        <div class="arrow-book2">
            <i class="fas fa-arrow-left" ></i>
        </div>



    </div>
    <h2 class="heading">الاقتصاد </h2>
    <div class="books-container">
        <div class="arrow-book1">
            <i class="fas fa-arrow-right" ></i>
        </div>
        <div class="slider-container-item">
        <a href="detail.php">    <img src=" img/book1.jpg" alt="" ></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">ابابيل كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt ba"></i>
        </div>
        </div>
        <div class="slider-container-item">
           <a href="detail.php"> <img src=" img/book2.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">علم التاتير كتاب الاكتروني</p>
            <p class="p-price">55 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
         <a href="detail.php"> <img src=" img/book3.jpg" alt="" id="display-slide"></a>  
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  الذكاء العاطفي </p>
            <p class="p-price">70 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

     
        <div class="slider-container-item">
          <a href="detail.php">  <img src=" img/book4.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">من جيد الى عظيم كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        
        <div class="slider-container-item">
        <a href="detail.php">   <img src=" img/book5.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  اعادة تصميم العمل كتاب الاكتروني </p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        <div class="arrow-book2">
            <i class="fas fa-arrow-left" ></i>
        </div>



    </div>
    <h2 class="heading">الطبخ </h2>
    <div class="books-container">
        <div class="arrow-book1">
            <i class="fas fa-arrow-right" ></i>
        </div>
        <div class="slider-container-item">
           <a href="./detail.php"> <img src=" img/book7.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">لانك الله</p>
            <p class="p-price">80 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        <div class="slider-container-item">
          <a href="./detail.php"><img src=" img/book2.jpg" alt="" id="display-slide"></a>  
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">علم التاتير كتاب الاكتروني</p>
            <p class="p-price">55 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
         <a href="detail.php">  <img src=" img/book4.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">من جيد الى عظيم كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
          <a href="./detail.php"> <img src=" img/book3.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  الذكاء العاطفي </p>
            <p class="p-price">70 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

            <div class="slider-container-item">
          <a href="detail.php"> <img src=" img/book5.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  اعادة تصميم العمل كتاب الاكتروني </p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        <div class="arrow-book2">
            <i class="fas fa-arrow-left" ></i>
        </div>



    </div>
    <h2 class="heading">افضل الروايات الرومانسية </h2>
    <div class="books-container">
        <div class="arrow-book1">
            <i class="fas fa-arrow-right" ></i>
        </div>
        <div class="slider-container-item">
         <a href="detail.php">  <img src=" img/book1.jpg" alt="" ></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">ابابيل كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt ba"></i>
        </div>
        </div>
        <div class="slider-container-item">
           <a href="./detail.php"> <img src=" img/book2.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">علم التاتير كتاب الاكتروني</p>
            <p class="p-price">55 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

        <div class="slider-container-item">
           <a href="./detail.php"> <img src=" img/book3.jpg" alt="" id="display-slide"></a>
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  الذكاء العاطفي </p>
            <p class="p-price">70 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>

     
        <div class="slider-container-item">
           <a href="detail.php"><img src=" img/book4.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">من جيد الى عظيم كتاب الاكتروني</p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        
        <div class="slider-container-item">
           <a href="detail.php"><img src=" img/book5.jpg" alt="" id="display-slide"></a> 
            <p class="p-title">كتاب الاكتروني </p>
            <p class="p-s-title">  اعادة تصميم العمل كتاب الاكتروني </p>
            <p class="p-price">69 ريال</p>
            <p class="p-taxt"> شامل الضريبة</p>
            <p class="p-text"> صيغ اخرى: <span>كتاب مطبوع</span></p>
            <div class="parent-add-shop">
                <i class="fas fa-star"></i>
            <div class="add-shop" > 
                <i class="fas fa-cart-plus"></i>
            </div>
            <i class="fas fa-exchange-alt"></i>
        </div>
        </div>
        <div class="arrow-book2">
            <i class="fas fa-arrow-left" ></i>
        </div>



    </div>
    <!--star footer-->
    <footer>
        <div class="footer1">
            <div class="form-back">
                <h3 class="h3">انضم الى نشرتنا البريدية </h3>
                <div class="form-footer">
                <form action="" method="post"></form>
                <input type="email" placeholder="ادخل بريدك الاكتروني" class="input"> <button class="button"> اشتراك</button>
            </div> 
            </div>
            <div class="footer-s">
                    <h3 class="h3">خدمة العملاء</h3>
                    <ul>
                        <li>مبيعات الشركات </li>
                        <li>الاسئلة المتكررة</li>
                        <li>دليل التسوق و المطبوعات</li>
                        <li>مواقع المعارض </li>
                        <li>سياسات النظام</li>
                        <li>سياسة الاستتبدال و الاسترجاع </li>
                        <li>اتصل بنا </li>
                        <li>999777555</li>
                    </ul>
            </div>
            <div class="footer-s">
                <h3 class="h3">خدمات جرير</h3>
                <ul>
                    <li>خدمة تقسيط المشتريات</li>
                    <li>خدمة ما بعد البيع</li>
                    <li>  خدمة الحماية الشاملة </li>
                    <li>خدمة ابل</li>
                    <li> بطاقة جرير</li>
                    <li> بطاقة جرير للهدايا </li>
                    
                </ul>
        </div>
        <div class="footer-s">
            <h3 class="h3">الروابط السريعة</h3>
            <ul>
                <li>اصدارات جرير</li>
                <li>قارئ جرير </li>
                <li>  شركاء برامج المكاقئات </li>
                <li>حدمات شركات الاتصالات</li>
            </ul>
    </div>
    <div class="footer-s">
        <h3 class="h3">خدمة العملاء</h3>
        <ul>
            <li> من نحن </li>
            <li>الحكومة </li>
            <li> علاقات المستثمرين و التقارير </li>
            <li>الاستدامة  </li>
            <li>الاخبار  </li>
            <li>فرص العمل</li>
       
        </ul>
</div>
<div class="footer-s">
    <h3 class="h3">تواصل معنا</h3>
    <p class="media">
        <i class="fab fa-instagram"></i> 
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i> 
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-twitter"></i>
    </p>
</div>
         
           
        </div>
        <div class="footer2">
            <div>
                <img src="images/american-express.png" alt="">
                <img src="images/master.png" alt="">
                <img src="images/visa.png" alt="">
                <img src="images/mada.jpg" alt="">
                <img src="images/qitaf.png" alt="">
            </div>
            <div>
                <p> <a href=""> سياسة الخصوصية | شروط الخدمة <br>
                .جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 101065421</a></p>
            
        </div>
    </footer>
    
    <script src="js/language.js"></script>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>
    
    <!--end footer-->
</body>
</html>
