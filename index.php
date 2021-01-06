<?php 
    include("mysql.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>中科大筆記交流平台</title>
    <style type="text/css">
        @import url(P1.css);
        h1{text-align: center;
         font-size: 40pt}
         body{font-family:Microsoft JhengHei;
           background-color: rgb(235, 235, 235) }
           a{
            text-decoration: none;
        }
        a:link{
            color:#000000;
        }
        a:visited{
            color: #000000;
        }
        a:hover {
            color: rgb(136, 136, 136);
        }
    </style>
</head>
<body>
    <div id="header"><h1>中科大筆記交流平台</h1></div>
    <div id="select">
        <b><a href="P2.php">註冊</a>  |  <a href="P2-1.php">登入&nbsp;</a></b></div>
            <div id="left">
                <ul style="list-style:none">
                            <li>商學院
                                <ul>
                                    <li><a href="#" onclick='show(1);'>國際貿易</a></li>
                                    <li><a href="#" onclick='show(2);'>會計資訊</a></li>
                                    <li><a href="#" onclick='show(3);'>保險金融管理</li>
                                    <li><a href="#" onclick='show(4);'>企業管理</a></li>
                                    <li><a href="#" onclick='show(5);'>財政稅務</a></li>
                                    <li><a href="#" onclick='show(6);'>財務金融</a></li>
                                    <li><a href="#" onclick='show(7);'>應用統計</a></li>
                                    <li><a href="#" onclick='show(8);'>休閒事業經營</a></li>
                                </ul>
                            </li>
                            <li>設計學院
                                <ul>
                                    <li><a href="#" onclick='show(9);'>商業設計</a></li>
                                    <li><a href="#" onclick='show(10);'>多媒體設計</a></li>
                                    <li><a href="#" onclick='show(11);'>室內設計</a></li>
                                    <li><a href="#" onclick='show(12);'>創意商品設計</a></li>
                                </ul>
                            </li>
                            <li>資訊與流通學院
                                <ul>
                                    <li><a href="#" onclick='show(13);'>資訊管理</a></li>
                                    <li><a href="#" onclick='show(14);'>資訊工程</a></li>
                                    <li><a href="#" onclick='show(15);'>流通管理</a></li>
                                </ul>
                            </li>
                            <li>語文學院
                                <ul>
                                    <li><a href="#" onclick='show(16);'>應用日語</a></li>
                                    <li><a href="#" onclick='show(17);'>應用英語</a></li>
                                    <li><a href="#" onclick='show(18);'>應用中文</a></li>
                                </ul>
                            </li>
                            <li>中護健康學院
                                <ul>
                                    <li><a href="#" onclick='show(19);'>護理</a></li>
                                    <li><a href="#" onclick='show(20);'>美容</a></li>
                                    <li><a href="#" onclick='show(21);'>老人服務事業管理</a></li>
                                </ul>
                            </li>
                        </ul>
                        <script language="JavaScript">
                            function show(nr) {
                                for(i=0;i<22;i++){
                                  document.getElementById("a"+i).style.display="none";
                                }
                                document.getElementById("a"+nr).style.display="block";
                            }
                            function myFunction() {
                                alert("登入或註冊以繼續!");
                            }
                        </script>
                    </div>
            <div id="middle">
              <div id="a0">
                         <?php
                            $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID ORDER BY note.ntime DESC";
                            $result=mysqli_query($conn,$sql);
                            while ($row = mysqli_fetch_array($result) ) {
                              echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";                 
                            }
                        ?><br>
               </div>
               <div id="a1">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID  FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='國際貿易' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";    
                } 
            ?>         
          </div>
          <div id="a2">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='會計資訊' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                             echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";  
                } 
            ?>         
          </div>
          <div id="a3">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='保險金融管理' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                     echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a4">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='企業管理' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                     echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a5">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='財政稅務' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                     echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a6">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='財務金融' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a7">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='應用統計' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a8">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='休閒事業經營' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a9">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='商業設計' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a10">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='多媒體設計' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                     echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a11">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='室內設計' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a12">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='創意商品設計' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                     echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a13">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='資訊管理' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a14">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='資訊工程' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                     echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a15">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='流通管理' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a16">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='應用日語' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a17">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='應用英語' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                    echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a18">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='應用中文' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a19">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='護理' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                      echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a20">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='美容' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                     echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>
          <div id="a21">
           <?php
           $sql = "SELECT note.noteName,sale.seller,sale.points,note.tx,note.noteID FROM sale,note WHERE sale.noteID=note.noteID AND note.ncla='老人服務事業管理' ORDER BY note.ntime DESC";
               $result=mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_array($result) ) {
                     echo "<br><br><div id='tit'><input type='hidden' name='nid' value=".$row[4].">
                              <button onclick='myFunction()' id='bb2'>".$row[0]."</button></div><br>"; //標題
                              echo "<div id='ll'>".$row[1]."</div><br>"; //上傳者
                              echo "<div id='rr1'><button onclick='myFunction()' id='bb'>❤ 收藏</button>
                              </div><br>";
                              echo "<div id='con'>".$row[3]."</div><br>";
                              echo "<hr id='h'><br>";
                } 
            ?>         
          </div>         
        </div>
        <div id="ad">
        <?php 
          $ssql = "SELECT apath FROM ad";
          $rresult=mysqli_query($conn,$ssql);
          $rrow = mysqli_fetch_array($rresult);
        ?>
        <img id='gi' src='<?php echo $rrow[0] ?>' alt='圖片無法顯示' title='廣告'>
      </div>
    </body>
    </html>