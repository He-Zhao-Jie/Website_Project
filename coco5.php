<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>coco-濃醇鮮乳</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/coco.css">
  <script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <style>
    .modal-body {
      text-align: left;
      color: black;
    }

    .logo {
      text-decoration: none;
      color: black;
    }
  </style>
  <script>
    //讓送出後不跳到別的頁面
    $('.sendToUser').on(
      'click',function() {
        var name = $("#Name").val();
        var sugar = $("input[type=radio]:checked").val();
        var ice = $("input[type=radio]:checked").val();
        var qty = $("#qty").val();
        if ($("input[name='selectUserRadio']").is(":checked") == false) {
          alert('Please, select a user to send.');
          return;
        }
      }
    );
  </script>
</head>

<body>
  <div id="mainWrapper">
    <header>
      <div id="logo"><a href="first.html" class="logo"><img src="https://image.flaticon.com/icons/png/128/25/25694.png" height="30"> Home</a></div>
      <div id="headerLinks"><a href="cart.php" title="Cart">Cart</a></div>
    </header>
    <section id="offer">
      <h2>關健食克</h2>
      <p>HEALTH</p>
    </section>
    <div id="content">
      <section class="sidebar">
        <div id="menubar">
          <nav class="menu">
            <p></p>
            <h2>
              <font size="5">MENU-COCO</font>
            </h2>
            <hr>
            <ul>
              <li><a href="coco1.php" title="Link">醇香茶品</a></li>
              <li><a href="coco2.php" title="Link">冰沙系列</a></li>
              <li><a href="coco3.php" title="Link">鮮調果茶</a></li>
              <li><a href="coco4.php" title="Link">香濃奶茶</a></li>
              <li><a href="coco5.php" title="Link">濃醇鮮乳</a></li>
              <li><a href="coco6.php" title="Link">嚴選咖啡</a></li>
            </ul>
          </nav>
        </div>
      </section>
      <section class="mainContent">
        <div class="productRow">
          <div style="text-align:center">
            <blockquote>
              <p class="producttitle">
                <u>濃醇鮮乳</u>
              </p>
            </blockquote>
          </div>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide1.style.display=hide1.style.display=='none'?'':'none'"><img src="images/501.png" height="150" alt="sample"></a></button></div>
            <span id="hide1" style="display:none">總熱量(卡):220<br /></span>
            <p class="price">$50</p>
            <p class="productContent">英式鮮奶茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-1">
            <form method="POST">
              <div class="modal fade" id="Modal5-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-1">
                        <input type="hidden" name="name" value="英式鮮奶茶">
                        <b>英式鮮奶茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="五分糖" />五分糖
                          <input type="radio" name="Sugar" value="三分糖" />三分糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide2.style.display=hide2.style.display=='none'?'':'none'"><img alt="sample" src="images/502.png" height="150"></a></button></div>
            <span id="hide2" style="display:none">總熱量(卡):565</span>
            <p class="price">$65</p>
            <p class="productContent">珍珠鮮奶茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-2">
            <form method="POST">
              <div class="modal fade" id="Modal5-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-2">
                        <input type="hidden" name="name" value="珍珠鮮奶茶">
                        <b>珍珠鮮奶茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="五分糖" />五分糖
                          <input type="radio" name="Sugar" value="三分糖" />三分糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
        </div>
      </section>
    </div>
    <footer>
      <div class="footerlinks">
        <p><a href="https://www.facebook.com/cocofreshtea.tw/" title="Link">FB</a></p>
        <p><a href="https://www.instagram.com/cocotea.tw/" title="Link">IG</a></p>
        <p><a href="https://page.line.me/554cchde?openQrModal=true" title="Link">Line</a></p>
      </div>
    </footer>
  </div>
  <?php
    require_once("cart_coco.inc");
  ?>
</body>

</html>