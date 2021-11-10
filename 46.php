<?php 
include 'script.php';
 ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Api Covid-19</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon"/>


     <script src="script.php"></script>


</head>
<body>
<?php 
include "./function/navbar.php";
 ?>
<?php 

    $url = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces');
    $covid = json_decode($url);
        //echo "<pre>";
        //print_r($covid);
        //echo "</pre>";

        $province = $covid[46]->province;
        $new_case = $covid[46]->new_case;
        $total_case = $covid[46]->total_case;
        $new_death = $covid[46]->new_death;
        $total_death = $covid[46]->total_death;
        $update_date = $covid[46]->update_date;



        print ("<div class='mt-5'>");
        print ("<div class='container'>");
        print ("<div class='col-9 mx-auto'>");
        print ("<div class='text-center my-5'>");
        print ("<div class='alert alert-primary' role='alert'>");
        print("<h2 class='text-white'>ยอดติดเชื้อในจังหวัด {$covid[46]->province}</h2>");
        print("<div class='card-body'>");
        print("<h4 class='text-white'>อัพเดทข้อมูลล่าสุด : {$covid[46]->update_date}</h4>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");

        print ("<div class='mt-5'>");
        print ("<div class='container'>");
        print ("<div class='col-6 mx-auto'>");
        print ("<div class='text-center my-5'>");
        print ("<div class='alert alert-info' role='alert'>");
        print("<h2 class='text-white'>ผู้ป่วยสะสม</h2>");
        print("<div class='card-body'>");
        print("<h4 class='text-white'>{$covid[46]->total_case} ราย</h4>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");


        print ("<div class='mt-5'>");
        print ("<div class='container'>");
        print ("<div class='col-6 mx-auto'>");
        print ("<div class='text-center my-5'>");
        print ("<div class='alert alert-danger' role='alert'>");
        print("<h2 class='text-white'>ติดเชื้อใหม่</h2>");
        print("<div class='card-body'>");
        print("<h6 class='text-white'>(เพิ่มขึ้น +{$covid[46]->new_case} ราย)</h6>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");



        print ("<div class='mt-5'>");
        print ("<div class='container'>");
        print ("<div class='col-6 mx-auto'>");
        print ("<div class='text-center my-5'>");
        print ("<div class='alert alert-dark' role='alert'>");
        print("<h2 class='text-white'>เสียชีวิต</h2>");
        print("<div class='card-body'>");
        print("<h4 class='text-white'>{$covid[46]->total_death} ราย</h4>");
        print("<h6 class='text-white'>(เพิ่มขึ้น +{$covid[46]->new_death} ราย)</h6>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");
        print ("</div>");

         


 ?>


    
<div class="text-center">
        //ใส่ข้อมลู
    </div>
    <div class="text-center">
        <center><b> <a href="https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces" target="_blank"> หน้าตา API Click... </a></b></center>
    </div>
            <center>                                    <footer class="footer">
        <div class="content has-text-centered">
            <p>
            Made with ❤️ by Theearpat't Tawing'g
            <br>
            Powered By <a href="https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces">static.easysunday.com</a></a>!
            </p>
            <br>
            <p>คนดูทั้งหมด : <script type='text/javascript' src='https://www.siamecohost.com/member/gcounter/graphcount.php?page=covid-19.theearpat.rf.gd&style=07&maxdigits=5'></script></p>
<br>
        </div>
    </footer></center>



    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
</body>
</html>