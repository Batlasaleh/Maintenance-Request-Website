<?php 
    $title="Home Page";
    include 'header.php';
    include 'connect.php';
    
    if(isset($_POST['send'])){
        
        $name=$_POST['name'];
        $extno=$_POST['extno'];
        $email=$_POST['email'];
        $department=$_POST['department'];
        $problem=$_POST['problem'];
        $program=$_POST['pro'];
        $else=$_POST['else'];
        
        $query= "INSERT INTO problems ( name, extno, email, department, problem, program, another) VALUES ('$name', $extno, '$email', '$department', '$problem', '$program', '$else')";
        $result=mysqli_query($con, $query);
         
        if($result==1)
            header("Location: index.php?status=done");
        else
            header("Location: index.php?status=notdone");

    }
    
?>
        
        <div class="boody" style="background-color: white; padding-bottom: 10px">
            <form id="request" name="request" method="POST" action="index.php">
            <fieldset style="padding: 65px; margin-right: 850px">
            <label for="name">Name \ الأسم:*</label>
            <input type="text" id="name" name="name" required>
            <br><br>
            <label for="extno">Ext No. \ رقم التحويلة:*</label>
            <input type="text" id="extno" name="extno" required>
            <br><br>
            <label for="email">Email \ الايميل:*</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <label for="department">Department \ القسم:*</label>
            <br><br>
            <select id="department" name="department" required>
                <option value=""> </option>
                <option value="Management of Employees rights">Management of Employees rights / إدارة حقوق الموظفين</option>
                <option value="Management of Legal Affairs">Management of Legal Affairs / إدارة الشؤون القانونية</option>
                <option value="Management of Patients Safety">Management of Patients Safety / إدارة سلامة المرضى</option>
                <option value="Management of Relations and Health Media">Management of Relations and Health Media / إدارة العلاقات و الاعلام الصحي</option>
                <option value="Management of Patients Relations">Management of Patients Relations / إدرة علاقات المرضى</option>
                <option value="Management of E-Health">Management of E-Health / إدارة الصحة الإلكترونية</option>
                <option value="Training and Continuing Education Center">Training and Continuing Education Center / مركز التدريب والتعليم المستمر</option>
                <option value="Management of Quality">Management of Quality / إدارة الجودة</option>
                <option value="Management of Clinical Review">Management of Clinical Review / إدارة المراجعة الاكلينيكية</option>
                <option value="Management of Medical Referral">Management of Medical Referral / إدارة الإحالة الطبية</option>
                <option value="Nursing Services">Nursing Services / الخدمات التمريضية</option>
                <option value="Medical Administration">Medical Administration / الإدارة الطبية</option>
                <option value="Administrative and Operational Services">Administrative and Operational Services / الخدمات الإدارية والتشغيل</option>
                <option value="Medical Supply">Medical Supply / التموين الطبي</option>
                <option value="Purchases">Purchases / المشتريات</option>
                <option value="Medical Maintenance">Medical Maintenance / الصيانة الطبية</option>
                <option value="General Maintenance">General Maintenance / الصيانةالعامة</option>
                <option value="Housing">Housing / الإسكان</option>
                <option value="Safety and Security">Safety and Security / الأمن و السلامة</option>
                <option value="Laundry">Laundry / مغسلة</option>
                <option value="Mortuary">Mortuary / ثلاجة الموتى</option>
                <option value="Warehouses">Warehouses / المستودعات</option>
                <option value="Financial Affairs">Financial Affairs / الشؤون المالية</option>
                <option value="Employees Affairs">Employees Affairs / شؤون الموظفين</option>
                <option value="Medical Insurance">Medical Insurance / الضمان الطبي</option>
                <option value="Health Economics">Health Economics / اقتصاديات الصحة</option>
                <option value="self-operative">self-operative / التشغيل الذاتي</option>
                <option value="General Services">General Services / الخدمات العامة</option>
                <option value="Administrative Communications">Administrative Communications / الاتصالات الإدارية</option>
                <option value="Religious Awareness">Religious Awareness / التوعية الدينية</option>
                <option value="Department of Surgery">Department of Surgery / قسم الجراحة</option>
                <option value="Department of Internal Medicine">Department of Internal Medicine / قسم الباطنية</option>
                <option value="Obstetrics and Gynecology Department">Obstetrics and Gynecology Department / قسم النساء والولادة</option>
                <option value="Department of Intensive Care">Department of Intensive Care / قسم العناية المركزة</option>
                <option value="Radiation Department">Radiation Department / قسم الاشعة</option>
                <option value="Dental Department">Dental Department / قسم الأسنان</option>
                <option value="Department of Anesthesia">Department of Anesthesia / قسم التخدير</option>
                <option value="Emergency Department">Emergency Department / قسم الطوارئ</option>
                <option value="Outpatient Clinics">Outpatient Clinics / العيادات الخارجية</option>
                <option value="Operations">Operations / العمليات</option>
                <option value="Pharmacy">Pharmacy / الصيدلية</option>
                <option value="Infection Prevention">Infection Prevention / مكافحة العدوى</option>
                <option value="Respiratory Therapy">Respiratory Therapy / العلاج التنفسي</option>
                <option value="Home Care Program">Home Care Program / برنامج رعاية المنزلية</option>
                <option value="Beds Management">Beds Management / إدارة الأسرة</option>
                <option value="Patients Affairs">Patients Affairs / شؤون المرضى</option>
                <option value="Social Service">Social Service / الخدمة الاجتماعية</option>
                <option value="Medical Records">Medical Records / السجلات الطبية</option>
                <option value="Health Awareness">Health Awareness / التوعية الصحية</option>
                <option value="Central sterilization">Central sterilization / التعقيم المركزي</option>
                <option value="Physical Therapy">Physical Therapy / العلاج الطبيعي</option>
                <option value="Dietary Services">Dietary Services / خدمات التغذية</option>
                <option value="Eligibility and Coordination Medical Treatment">Eligibility and Coordination Medical Treatment / أهلية العلاج والتنسيق الطبي</option>
                <option value="Risk Management">Risk Management / ادارة المخاطر</option>
                <option value="Neonatal Intensive Care Unit">Neonatal Intensive Care Unit / العناية المركزة بالمواليد</option>
                <option value="Pediatric Intensive Care Unit">Pediatric Intensive Care Unit / العناية المركزة للأطفال</option>
                <option value="Translation">Translation / الترجمة</option>
                <option value="Contracts">Contracts / العقود</option>
                <option value="Cardiology">Cardiology / القلب</option>
                <option value="Medical Fellowship">Medical Fellowship / الزمالة الطبية</option>
                <option value="Central">Central / السنترال</option>
                <option value="Embryology">Embryology / علم الأجنة</option>
                <option value="Career Development Management">Career Development Management / ادارة التطوير الوظيفي</option>
                <option value="Establishment Safety">Establishment Safety / سلامة المنشأة</option>
                <option value="Pediatric emergency">Pediatric emergency / إسعاف الاطفال</option>
                <option value="Ob/Gyn emergency">Ob/Gyn emergency / إسعاف النساء</option>
                <option value="Ob/Gyn Outpatient Clinics">Ob/Gyn Outpatient Clinics / العيادات الخارجية نساء</option>
                <option value="Pediatric Outpatient Clinics">pediatric Outpatient Clinics / العيادات الخارجية أطفال</option>
                <option value="Inventory Control Management">Inventory Control Management / إدارة مراقبة المخزون</option>
                <option value="Saudi Board Program for Pediatrics">Saudi Board Program for Pediatrics / برنامج الزمالة السعودي لطب الأطفال</option>
                <option value="Pediatric Endocrinology & Diabetes Unit">Pediatric Endocrinology & Diabetes Unit / وحدة الغدد الصماء والسكري للأطفال</option>
            </select>
            <br><br>
            <label for="problem">Problem / المشكلة:*</label>
            <br>
            <input type="radio" name="problem" id="problem" value="Computer" style="margin-left: 75px">1-Computer / حاسب آلي.
            <br>
            <input type="radio" name="problem" id="problem" value="Internet Or Network" style="margin-left: 75px">2-Internet Or Network / شبكة او انترنت.
            <br>
            <input type="radio" name="problem" id="problem" value="Need a program" style="margin-left: 75px">3-Need a program / الحاجة الى برنامج.
            <br>
            <input type="text" id="pro" name="pro" placeholder="name it / اسمه" style="margin-left: 75px">
            <br>
            <input type="radio" name="problem" id="problem" value="Printer Or Scanner" style="margin-left: 75px">4-Printer Or Scanner / طابعة او ماسح ضوئي.
            <br>
            <input type="radio" name="problem" id="problem" value="Problem In MOH Portal ID" style="margin-left: 75px">5-Problem In MOH Portal ID / مشكلة في حساب الوزارة  .
            <br>
            <input type="radio" name="problem" id="problem" value="My Manger" style="margin-left: 75px">6-My Manger / خدمة مديري.
            <br>
            <input type="radio" name="problem" id="problem" value="Else" style="margin-left: 75px">7-Else / اخرى.....
            <br>
            <textarea id="else" name="else" placeholder="Write here..." rows="10px" cols="30px" style="margin-left: 75px"></textarea>
            <br><br>
            <input type="submit" class="button" value="Send" name="send" id="send" onclick="sent()">
            </fieldset>
            </form>
        </div>
<?php include 'footer.php';?>
<script>
    function sent()
       { 
            if(document.getElementById("name").value!="" && document.getElementById("extno").value!="")
            alert("Request Sent Successfully!");
    }
    
</script>

