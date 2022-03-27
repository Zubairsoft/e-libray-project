<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta auhtor="mohammed zubair" content="libary">
    <link rel="stylesheet" href="   css/ARB.CSS">
    <link rel="stylesheet" href="   css/all.css">
    <link rel="stylesheet" href="   css/head-footer.css">
    <link rel="stylesheet" href="   css/check.css">
    <link rel="stylesheet" href="   css/index.css">
    <link rel="stylesheet" href="   css/quiry.css">
    <title>Details</title>
</head>
<body id="display-h">
    <!--start header-->
    <header>
        <div class="head1">
            
            <div><a href="#" onclick="login()"><span> <i class="fas fa-user"></i> ادخل لحسابك او سجل الان</span></a></div>
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
                <img src="images/logo.svg" alt="">
            </div>
            <div>
                <input type="search" placeholder="البحث">
            </div>
            <div>
                
                <div class="crical">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <div class="head3">
            <P class="timer"><span style="color: yellow;font-size: 20px;">عروض خاصة</span>  <span id="day"> </span> <span> يوم</span><span>-</span><span id="hour"></span ><span>ساعة</span><span>-</span><span id="mint"></span><span>دقيقة</span><span>-</span><span id="second"></span><span>تانية</span></P>
            <div class="head-img">
                <div> <i class="fas fa-arrow-right" onclick=" Pv()"></i> </div>
             <img src="   img/adv.jpg" alt="" class="head-imges">
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
    <!--start detail page-->
    <!--star nav-->
    <div class="manu">
        <nav > 
            <ul class="ul" >
                <li>  الرئيسية  </li>
                <li> / الكتب العربية  </li>
                <li> / الكتب الاكترونية  </li>
                <li>  / لأنك الله (كتاب الكتروني)</li>

            </ul>
    </div>
    <!--end nav-->
    <!-- statr detail information about the books-->
    <div class="detail-container">
        <div class="book">
            <div class="book-align">
            <img src="   img/book7.jpg" alt="" id="display-slide">
        </div>
            <div class="book2"> 
                <img src="   img/book7.jpg" id="display-Slide" alt="">

            </div>


        </div>
        <div class="book-info">
            <div class="book-heading">
                <h1>لأنك الله (كتاب إلكتروني)</h1>
            </div>
          <p>
                <span><a href="#" class="a-color">عرض المزيد</a></span>
                <span class="total"> 12.99 رس</span>
                <span class="sub-pp"> شامل الضريبة</span>
          </p>
          <div class="book-d">
              <p>
                  <span class="book-span">Each: وحدة البيع</span>
                  <span class="a-color">(16 المراجعات)   </span>
                  <span class="book-span">رقم الصنف JBB410156 رقم المنتج 4 </span>
              </p>
        
            </div>
            <div class="book-select">
                <h4 class="color-h4">الصيغ المتوفرة</h4>
                <div class="align-select">
                    <div class="align-radio" >
                <input type="radio" class="radio" ><span> كتاب الاكتروني </span> 
                    </div>
                    <div>
                    <span class="total">12.99</span>
                    <span class="sub-pp"> شامل الضريبة</span>
                </div>
                </div>
                <div class="align-select">
                    <div class="align-radio">
                <input type="radio" class="radio" >  <span> كتاب مطبوع</span>
                </div>
                <div>
                <span class="total">17.55</span>
                <span class="sub-pp"> شامل الضريبة</span>
            </p>
            </div>
                </div>

            </div>


    </div>
    <div class="order">
        <div class="order-container">
        <div class="order-note">
                    <p> <h5>ملاحظة:</h5>سيتم إضافة هذا الكتاب الإلكتروني إلى مكتبتك في قارئ جرير.</p>
                </div>
                <div  class="order-button">
                    <form action >
                        <select name="num">
                            <option value="">1</option>
                        </select>
                    </form>
                    <button>
                        <i class="fas fa-cart-plus"></i>
                        اضافة الى السلة
                    </button>

                </div>
                <div class="charteres">
                    <p><span>تسوق امن </span> <span>اصلي و مضمون</span></p>
                    <p> <span>شحن سريع ومجاني</span></p>
                </div>
                <div class="buttons">
                    <button>المشاركة</button>
                    <button>المفضلة</button>
                    <button>المقارنة</button>
                </div>

    </div>

    </div>
    </div>
<div class="description">
    <p>   كتاب يتحدث عن بعض اسماءالله الحسنى وكيف نعيشهلا حرص المولف ان يكون الكتاب مناسباً لمتوسطي التقافة و ان يكون مناسباً للمحتاج و المريض و السليم
    </p>
</div>
<table>
<tr>
    <th>المواصفات</th>
    <th></th>
</tr>
<tr>
    <td>رقم الصنف</td>
    <td>JPP4786587</td>
</tr>
<tr>
    <td>رقم المنتج</td>
    <td>4</td>
</tr>
<tr>
    <td>المؤلف </td>
    <td>علي جابر العيسي</td>
</tr>
<tr>
    <td>الناشر </td>
    <td>دار الحضارة للنشر و التوزيع </td>
</tr>
<tr>
    <td>تاريخ النشر </td>
    <td>علي جابر العيسي</td>
</tr>
<tr>
    <td>صيغة الكتاب  </td>
    <td>ebook</td>
</tr>
<tr>
    <td>عدد الصفحات </td>
    <td>275  </td>
</tr>
<tr>
    <td>وزن الشحن(كجم) </td>
    <td>0.0001</td>
</tr>
<tr>
    <td>صيغة الملف </td>
    <td>ePUD</td>
</tr>
<tr>
    <td> اللغة </td>
    <td>عربي</td>
</tr>
</table>

<div class="customer-review-container">
    <div>
<h2 >مراجعات العملاء</h2> 
<button class="btn-review">+ اكتب مراجعتك</button>
    </div>
    <div class="comment">
        <div class="com-head">
            <span>كتاب رائع</span>

        </div>
        <div class="com-footer">
            <span>محمد زبير</span>
            <span>1/1/2020</span>

        </div>

    </div>

    <div class="comment">
        <div class="com-head">
            <span> كتاب جميل و رائع</span>

        </div>
        <div class="com-footer">
            <span>مراد العمودي</span>
            <span>1/1/2020</span>

        </div>

    </div>
    <div class="comment">
        <div class="com-head">
            <span>good </span>

        </div>
        <div class="com-footer">
            <span>عبدالله الجوهي </span>
            <span>1/1/2020</span>

        </div>

    </div>



</div>
     <!--star books-->
     <h2 class="heading"> منتجات مشابهة</h2>
     <div class="books-container">
         <div class="arrow-book1">
             <i class="fas fa-arrow-right" ></i>
         </div>
         <div class="slider-container-item">
             <img src="   img/book1.jpg" alt="" >
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
             <img src="   img/book2.jpg" alt="" id="display-slide">
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
             <img src="   img/book3.jpg" alt="" id="display-slide">
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
             <img src="   img/book4.jpg" alt="" id="display-slide">
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
             <img src="   img/0book5.jpg" alt="" id="display-slide">
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
    <!--star slide model-->
    <div id="model-s">
    <div class="model-s"> 
        <div class="arrow">   <i class="fas fa-arrow-right" onclick="Next()"></i> </div>
    <div class="slider-m">
        <div class="image-box">
          
            <img src="   img/book7.jpg" alt="" class="slaidr-img">
           
            

        </div>
    </div>
    <div class="arrow">
        <i class="fas fa-arrow-left" onclick="Prev()"></i>
    </div>
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
    <script src="   js/language.js"></script>
    <script src="   js/app.js"></script>
    <script src="   js/main.js"></script>
    <!--end footer-->
</body>
</html>