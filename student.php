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
    <div class="mainArea">
      <p class="T1">ทะเบียนนักศึกษา</p>
      <p class="T2">
        <input type="text" value="ระบุคำค้น">
        <button class="b1">ค้นหา</button>
        <button class="b2">เพิ่มนักศึกษา</button>
      </p>
      <div>
        <table>
          <tr>
            <th>รหัสนักศึกษา</th>
            <th>ชื่อ - นามสกุล</th>
            <th>วันเดือนปีเกิด</th>
            <th>เบอร์โทรศัพท์</th>
            <th>ดำเนินการ</th>
          </tr>
          <tbody>
            <tr>
              <td>xx</td>
              <td class="subj">
                xx
              </td>
              <td>xx</td>
              <td>xx</td>
              <td><button class="b3"><a href="studentManage.php">แก้ไขข้อมูล</a></button>
                <button class="b4">ลบข้อมูล</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>