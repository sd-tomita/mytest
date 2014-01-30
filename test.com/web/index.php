<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">  
<html lang="ja">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-script-type" content="text/javascript">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>test.sunrisedigital.jp</title>

</head>

<body>
<?php
echo 'Today is '.date('Y/m/d (D)');
echo 'ここはテスト用サイトです'.'<br><br>'; 

//スコープのテスト。for文にスコープはあるのか
for($i=0; $i<10; $i++){
   $j="jjjj";
  echo $j.$i."<br>";
}

echo "for文外".$j.$i;//スコープがあればここには出力されない



?>
<div class="jstest">
<h3>JavaScript のテスト</h3>
<script type="text/javascript">
var str = "string%key%string";
document.write("<p>元の文字列</p>");
document.write("str:", str);
document.write("<br>");

var case1 = str.split("%key%");
document.write("<p>.split()を実行</p>");
document.write("case1:", case1);
document.write("<br>");

var case2 = case1.join("value");
document.write("<p>.join()で元に戻す</p>");
document.write("case2:", case2);
document.write("<br>");


var date = new Date("2012-12-12 15:35:44")
document.write(date.getFullYear());
document.write("<br>");


document.write("<h4>配列のテスト</h4>");
var arr = ["aaaa","bbbb"];
arr[7] = "cccc";
document.write(arr.length);

+function(){
  document.write("<h4>即時関数の実行テスト</h4><p>この2行が表示されていればおｋ</p>");
}(); // +function(){}(); = (function(){})(); と同義。



</script>
</div>
<noscript>jsテスト実行のため、JavaScriptを有効にしてください。</noscript>

<p>Copyright Yuichiro Tomita <?php echo '2013-'.date('Y')?>. All rights reserved.</p>
</body>

</html>