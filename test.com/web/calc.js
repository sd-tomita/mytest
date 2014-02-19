/**
 * 計算機
 * 
 * @author  Yuichiro Tomita <tomita@sunrisedigital.jp>
 * @copyright 2014 
 **/

//変数類
ans = 0;//計算中の数字
num = "0";//入力中の文字列(数字)
key = "";//１つ前に押されたキー
kigou = "";//数字の前に押されたキー


/**
 * 計算用関数
 */ 

	/*====================
		処理①
	====================*/

	if(!isNaN(btn)) {//変数btnが数値:true、文字列:false
		if(!isNaN(key)) {//前に押されたキーが数値かどうか。数値:true、文字列:false
			if(kigou == "=") {
				ans = 0;
				kigou = "";
			}
			if(num == "0") {
				num = ""+btn;//「01」とかにならないようにする処理。
			} else {
				num += ""+btn;
			}/*keyもtrue:連続して数値が押されている場合の処理。
											「""」は数値を計算させずに繋げるための擬似文字列。
										(btnを文字列化する と言い換えることも可能)*/
		} else {
			num = ""+btn;/*keyがfalse:key(文字列(要は+とかの記号)のあとに数値btnが押されて
									いる状態。)numには何も入っていないので、「=」で代入するだけでOK。*/
		}
		document.getElementById("output").innerHTML = num;
										/*if文の処理が終わったところで、変数numをid=outputのdivへ挿入*/
		
	} else {//上と同じ。btnが記号である点だけが違う
		if(!isNaN(key)) {
			if (kigou == "") {
				ans = num;//calc_run()の記号が入力されたときはansとnumを入れ替える
			}	else {
				ans = eval(ans + kigou + num);
			}
			num = "0";//計算は終わってansに入っているので次の数値入力に備え、numは初期化する
			document.getElementById("output").innerHTML = ans;
		}
		kigou = btn;
		document.getElementById("type").innerHTML = kigou;
									/*記号が押されたときは、変数kigouに記録が残されるので、
									そのまま変数kigou内の文字を画面に表示すればOK。
									前のキーに関係なく、最後に押された記号を表示するだけ*/
	}

	/*====================
		処理②
	====================*/
	key = btn;//変数btnを変数keyに入れて、後で直前のキー入力が何かを参照できるようにする。	
}


/**
 * 小数点操作
 */
function calc_period() {
	if(num.indexOf(".") < 0) num += ".";
			//既に小数点が使われているときのためのif文。
			//使われているときは何もしないので{}はつけなくてもOK。
			//※関数indexOf() → 先頭から指定の文字を検索し、先頭を0番目として値を返す。
			key = 0;//calc_period()の中で、「・」を数字と見なすため
	document.getElementById("output").innerHTML = num;
}

/**
 * イコール操作
 */
function calc_equal() {
	//document.title = key + "=" + ":" + ans + "[" + kigou + "]" + num;
	if (key == "=") {//既に一度イコールが使われている場合
		ans = 0;
		key = "";
	} else {//まだイコールが使われていない場合は計算する
		ans = eval(ans + kigou + num);//eval():文字列を計算式として実行
		key = "=";
	}
	num = "0";//終わったらnumは0に戻す
	kigou = key;
	document.getElementById("output").innerHTML = ans;
	document.getElementById("type").innerHTML = key;
}


/**
 * AC操作
 */
function calc_ac() {//各変数を初期化するだけ
	ans = 0;
	num = "0";
	key = "";
	kigou = "";

	//表示もクリアする
	document.getElementById("output").innerHTML = ans;
	document.getElementById("type").innerHTML = key + "&nbsp;";
}
