<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Page : Software engineering</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/student.css" />
</head>

<body>
  <div class="head">
    <div class="hleft">
      <p class="p1">วิศวกรรมซอฟต์แวร์</p>
      <p class="p2">คณะเทคโนโลยีอุตสาหกรรม</p>
    </div>
    <div class="hright">
      <p class="p3">Hello, Paijit </p>
      <div class="menu1">
        <ul>
          <li><a href="student.php">ทะเบียนนักศึกษา</a></li>
          <li>|</li>
          <li><a href="#">ผลการเรียน</a></li>
          <li>|</li>
          <li><a href="#">คะแนนกิจกรรม</a></li>
          <li>|</li>
          <li><a href="index.html">ออกจากระบบ</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="main">
    <p class="T3">แก้ไขข้อมูลนักศึกษา</p>
    <div class="mainArea">
      <div class="info_left">
        <div class="row">
          <label>รหัสนักศึกษา</label><input type="text" class="w50" value="รหัส">
        </div>
        <div class="row">
          <label>คำนำหน้าชื่อ</label><input type="text" class="w100" value="คำนำหน้าชื่อ">
        </div>
        <div class="row">
          <label>ชื่อ-สกุล</label>
          <div class="row-line">
            <input type="text" class="w50" value="ชือ"><input type="text" class="w50" value="นามสกุล">
          </div>
        </div>
        <div class="row">
          <label>สาขาวิชา</label><input type="text" class="w100" value="สาขาวิชา">
        </div>
        <div class="row">
          <label>ที่อยู่</label><textarea name="" id="" class="w100" rows="5">ที่อยู่</textarea>
        </div>
        <div class="row">
          <label>วันเดือนปีเกิด</label><input type="text" class="w50" value="วันเดือนปีเกิด">
        </div>
        <div class="row">
          <label>เบอร์โทรศัพท์</label><input type="text" class="w50" value="เบอร์โทรศัพท์">
        </div>
        <div class="row">
          <label>ชื่อเข้าใช้ระบบ</label><input type="text" class="w50 bgOrg" value="ชื่อเข้าใช้ระบบ">
        </div>
        <div class="row">
          <label>รหัสผ่าน</label><input type="text" class="w50 bgOrg" value="รหัสผ่าน">
        </div>
      </div>

      <div class="info_right">
        <div class="upImage">
          <img src="img/gear.jpg" alt="รูปนักศึกษา">
          <button class="b5">อัปโหลดรูป</button>
        </div>
        <button class="b6" onclick="window.history.back();">ยกเลิก</button>
        <button class="b7">ปรับปรุง</button>
      </div>
    </div>
  </div>

</body>

</html>