<?php
  if (empty($_SESSION['Login'])){
    $this->load->view('/templates/header');
  echo "登入後操作";
  $this->load->view('/templates/footer');
  //header('Location:login.php');
  die();
}
?>

<div class="row">
        <div class="col-md-3">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" style="width:300px;height:300px;" src="<?php echo base_url('./images/car1.jpg'); ?>" alt="">
          </a>

        </div>
        <div class="col-md-3">
          <h3>Lamborghini</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <p>價格:$1000000</p>
          <a class="btn btn-primary" id="bt1">增加</a>&nbsp;<a class="btn btn-primary" id="unbt1">減少</a>

        </div>

        <div class="col-md-3">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" style="width:300px;height:300px;" src="<?php echo base_url('./images/car2.jpg'); ?>" alt="">
          </a>

        </div>
        <div class="col-md-3">
          <h3>Ferrari</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
          <p>價格:$2000000</p>
          <a class="btn btn-primary" id="bt2">增加</a>&nbsp;<a class="btn btn-primary" id="unbt2">減少</a>

        </div>
</div>
<br><br>
<div class="row">
        <div class="col-md-3">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" style="width:300px;height:300px;" src="<?php echo base_url('./images/car3.jpg'); ?>" alt="">
          </a>
        </div>
        <div class="col-md-3">
          <h3>Koenigsegg</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
          <p>價格:$9000000</p>
          <a class="btn btn-primary" id="bt3">增加</a>&nbsp;<a class="btn btn-primary" id="unbt3">減少</a>
          <br>
        </div>
        <div class="col-md-4">
          <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 15px;
            }

          </style>
          <br>
          <br>
          <table id="cartb" style="width:100%">
            <tr>
              <th>車種</th>
              <th>Lamborghini</th>
              <th>Ferrari&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
              <th>Koenigsegg</th>
            </tr>
            <tr>
              <td>數量</td>
              <td id="sum1">0</td>
              <td id="sum2">0</td>
              <td id="sum3">0</td>
            </tr>
          </table>
          <br>
          <form method="post" action="<?php echo base_url(); ?>Home/checkmoney">
            <font size="10">總價格:</font>
            <input type="hidden" id="t1" name="t1">
            <input type="hidden" id="t2" name="t2">
            <input type="hidden" id="t3" name="t3">
            <input type="text" class="form-control" id="sum4" name="sum4" readonly="readonly" required>
            <input type="submit" value="結帳">
          </form>
        </div>

<Script Language="JavaScript">
window.onload=function() {
  var num1 = document.getElementById("sum1");
  var bt1 = document.getElementById("bt1");
  var unbt1 = document.getElementById("unbt1");

  var num2 = document.getElementById("sum2");
  var bt2 = document.getElementById("bt2");
  var unbt2 = document.getElementById("unbt2");

  var num3 = document.getElementById("sum3");
  var bt3 = document.getElementById("bt3");
  var unbt3 = document.getElementById("unbt3");

  var count1 = 0;
  var count2 = 0;
  var count3 = 0;
  var sum = 0;
  var count4 = 0;
  bt1.onclick = function () {
    count1 = count1 + 1;
    num1.innerHTML = count1;
    document.getElementById("t1").value = count1;
    count4 = count4 + 1000000;
    document.getElementById("sum4").value = count4;
  }
  unbt1.onclick = function () {
    count1 = count1 - 1;
    num1.innerHTML = count1;
    document.getElementById("t1").value = count1;
    count4 = count4 - 1000000;
    document.getElementById("sum4").value = count4;
  }

  bt2.onclick = function () {
    count2 = count2 + 1;
    num2.innerHTML = count2;
    document.getElementById("t2").value = count2;
    count4 = count4 + 2000000;
    document.getElementById("sum4").value = count4;
  }
  unbt2.onclick = function () {
    count2 = count2 - 1;
    num2.innerHTML = count2;
    document.getElementById("t2").value = count2;
    count4 = count4 - 2000000;
    document.getElementById("sum4").value = count4;
  }

  bt3.onclick = function () {
    count3 = count3 + 1;
    num3.innerHTML = count3;
    document.getElementById("t3").value = count3;
    count4 = count4 + 9000000;
    document.getElementById("sum4").value = count4;
  }
  unbt3.onclick = function () {
    count3 = count3 - 1;
    num3.innerHTML = count3;
    document.getElementById("t3").value = count3;
    count4 = count4 - 9000000;
    document.getElementById("sum4").value = count4;
  }
}
</Script>
