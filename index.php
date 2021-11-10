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



</div>
    <div class="mt-5">
        <div class="container">
             
                 <div class="row">
                <div class="col-20 mx-auto">
                    <div class="text-center my-5">
                        <div class="alert alert-primary" role="alert">
                          <h2 class="text-white">เลือกจังหวัด</h2>
                          <div class="card-body">

                          <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                เลือกจังหวัด
                              </a>

                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
 
                                <div class="btn-group-vertical">
                                <a class="dropdown-item text-dark" href="0">กระบี่</a>
                                <a class="dropdown-item text-dark" href="1">กรุงเทพมหานคร</a>
                                <a class="dropdown-item text-dark" href="2">กาญจนบุรี</a>
                                <a class="dropdown-item text-dark" href="3">กาฬสินธุ์</a>
                                <a class="dropdown-item text-dark" href="4">กำแพงเพชร</a>
                                <a class="dropdown-item text-dark" href="5">ขอนแก่น</a>
                                <a class="dropdown-item text-dark" href="6">จันทบุรี</a>
                                <a class="dropdown-item text-dark" href="7">ฉะเชิงเทรา</a>
                                <a class="dropdown-item text-dark" href="8">ชลบุรี</a>
                                <a class="dropdown-item text-dark" href="9">ชัยนาท</a>
                                <a class="dropdown-item text-dark" href="10">ชัยภูมิ</a>
                                <a class="dropdown-item text-dark" href="11">ชุมพร</a>
                                <a class="dropdown-item text-dark" href="12">ตรัง</a>
                                <a class="dropdown-item text-dark" href="13">ตราด</a>
                                <a class="dropdown-item text-dark" href="14">ตาก</a>
                                <a class="dropdown-item text-dark" href="15">นครนายก</a>
                                <a class="dropdown-item text-dark" href="16">นครปฐม</a>
                                <a class="dropdown-item text-dark" href="17">นครพนม</a>
                                <a class="dropdown-item text-dark" href="18">นครราชสีมา</a>
                                <a class="dropdown-item text-dark" href="19">นครศรีธรรมราช</a>
                                <a class="dropdown-item text-dark" href="20">นครสวรรค์</a>
                                <a class="dropdown-item text-dark" href="21">นนทบุรี</a>
                                <a class="dropdown-item text-dark" href="22">นราธิวาส</a>
                                <a class="dropdown-item text-dark" href="23">น่าน</a>
                                <a class="dropdown-item text-dark" href="24">บึงกาฬ</a>
                                <a class="dropdown-item text-dark" href="25">บุรีรัมย์</a>
                                <a class="dropdown-item text-dark" href="26">ปทุมธานี</a>
                                <a class="dropdown-item text-dark" href="27">ประจวบคีรีขันธ์</a>
                                <a class="dropdown-item text-dark" href="28">ปราจีนบุรี</a>
                                <a class="dropdown-item text-dark" href="29">ปัตตานี</a>
                                <a class="dropdown-item text-dark" href="30">พระนครศรีอยุธยา</a>
                                <a class="dropdown-item text-dark" href="31">พะเยา</a>
                                <a class="dropdown-item text-dark" href="32">พังงา</a>
                                <a class="dropdown-item text-dark" href="33">พัทลุง</a>
                                <a class="dropdown-item text-dark" href="34">พิจิตร</a>
                                <a class="dropdown-item text-dark" href="35">พิษณุโลก</a>
                                <a class="dropdown-item text-dark" href="36">ภูเก็ต</a>
                                <a class="dropdown-item text-dark" href="37">มหาสารคาม</a>
                                <a class="dropdown-item text-dark" href="38">มุกดาหาร</a>
                                <a class="dropdown-item text-dark" href="39">ยะลา</a>
                                <a class="dropdown-item text-dark" href="40">ยโสธร</a>
                                <a class="dropdown-item text-dark" href="41">ร้อยเอ็ด</a>
                                <a class="dropdown-item text-dark" href="42">ระนอง</a>
                                <a class="dropdown-item text-dark" href="43">ระยอง</a>
                                <a class="dropdown-item text-dark" href="44">ราชบุรี</a>
                                <a class="dropdown-item text-dark" href="45">ลพบุรี</a>
                                <a class="dropdown-item text-dark" href="46">ลำปาง</a>
                                <a class="dropdown-item text-dark" href="47">ลำพูน</a>
                                <a class="dropdown-item text-dark" href="48">ศรีสะเกษ</a>
                                <a class="dropdown-item text-dark" href="49">สกลนคร</a>
                                <a class="dropdown-item text-dark" href="50">สงขลา</a>
                                <a class="dropdown-item text-dark" href="51">สตูล</a>
                                <a class="dropdown-item text-dark" href="52">สมุทรปราการ</a>
                                <a class="dropdown-item text-dark" href="53">สมุทรสงคราม</a>
                                <a class="dropdown-item text-dark" href="54">สมุทรสาคร</a>
                                <a class="dropdown-item text-dark" href="55">สระบุรี</a>
                                <a class="dropdown-item text-dark" href="56">สระแก้ว</a>
                                <a class="dropdown-item text-dark" href="57">สิงห์บุรี</a>
                                <a class="dropdown-item text-dark" href="58">สุพรรณบุรี</a>
                                <a class="dropdown-item text-dark" href="59">สุราษฎร์ธานี</a>
                                <a class="dropdown-item text-dark" href="60">สุรินทร์</a>
                                <a class="dropdown-item text-dark" href="61">สุโขทัย</a>
                                <a class="dropdown-item text-dark" href="62">หนองคาย</a>
                                <a class="dropdown-item text-dark" href="63">หนองบัวลำภู</a>
                                <a class="dropdown-item text-dark" href="64">อ่างทอง</a>
                                <a class="dropdown-item text-dark" href="65">อำนาจเจริญ</a>
                                <a class="dropdown-item text-dark" href="66">อุดรธานี</a>
                                <a class="dropdown-item text-dark" href="67">อุตรดิตถ์</a>
                                <a class="dropdown-item text-dark" href="68">อุทัยธานี</a>
                                <a class="dropdown-item text-dark" href="69">อุบลราชธานี</a>
                                <a class="dropdown-item text-dark" href="70">เชียงราย</a>
                                <a class="dropdown-item text-dark" href="71">เชียงใหม่</a>
                                <a class="dropdown-item text-dark" href="72">เพชรบุรี</a>
                                <a class="dropdown-item text-dark" href="73">เพชรบูรณ์</a>
                                <a class="dropdown-item text-dark" href="74">เลย</a>
                                <a class="dropdown-item text-dark" href="75">แพร่</a>
                                <a class="dropdown-item text-dark" href="76">แม่ฮ่องสอน</a>
                                <a class="dropdown-item text-dark" href="77">ไม่ระบุ</a>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
















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