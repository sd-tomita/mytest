<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">  
<html lang="ja">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-script-type" content="text/javascript">
<!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<title>test.sunrisedigital.jp</title>

</head>

<body>
<div class="wrap">
<?php echo 'Today is '.date('Y/m/d (D)'); ?>
<h1>FREE TEST SPACE</h1><hr>

<div class="phparea">
<h2>PHP</h2>
<?php
//スコープのテスト。for文にスコープはあるのか
for($i=0; $i<10; $i++){
   $j="jjjj";
  echo $j.$i."<br>";
}

//if文だとどうなのか。
//PHPは関数以外はスコープされないはずなので$countの値は生きるはず
$zyouken = '条件あり';
if(isset($zyouken))
{
  $count+=1;
  echo $count."<br>";
}

if(isset($zyouken))
{
  $count+=1;
  echo $count."<br>";
}
echo "1と2が上に表示されていれば計画通り<br>";



echo "for文外".$j.$i;//スコープがあればここには出力されない

echo "<h3>累計テスト</h3>";
$count_total +=1;
echo $count_total."<br>";
$count_total +=1;
echo $count_total."<br>";
$count_total +=1;
echo $count_total."<br>";
$count_total +=1;
echo $count_total."<br>";

?>
</div>

<div class="jstest">
<h2>JavaScript</h2>
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


document.write("<h3>配列のテスト</h3>");
var arr = ["aaaa","bbbb"];
arr[7] = "cccc";
document.write(arr.length);

+function(){
  document.write("<h3>即時関数の実行テスト</h3><p>この2行が表示されていればおｋ</p>");
}(); // +function(){}(); = (function(){})(); と同義。

//そもそもこの関数自体はグローバル関数に定義されない　ことを確認するテスト
//即時関数の形だけど、あえてfunction に名前を付けてみる。

//これは実行されるはず
+function hogehoge(){
	document.write("<p>即実行<p>");
}();

//問題はこっち。
//hogehoge();
//Uncaught ReferenceError: hogehoge is not defined が出力。
//つまり、この関数hogehoge()はグローバルオブジェクトに所属していないことがわかる。

//hogehoge()をコメントアウトしたので、今度はこのdocument.writeが実行されるはず。
document.write('この上に"即実行"は1つだけなら計画通り');


</script>
</div>
<noscript>jsテスト実行のため、JavaScriptを有効にしてください。</noscript>

</div><!--wrap-->
<p>Copyright Yuichiro Tomita <?php echo '2013-'.date('Y')?>. All rights reserved.</p>
</body>

</html>