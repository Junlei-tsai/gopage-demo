function swap(){
			var ww1=document.getElementById("w1");
			var ww2=document.getElementById("w2");
			console.log("W1的值="+ww1.value)			
			console.log("W2的值="+ww2.value)
			if (ww1.value == "" ||ww2.value == ""){
			alert("要先輸入想交換的嘿!!");
			}
			else{
					const ww3=ww1.value;
					console.log("Ww3的值="+ww3.value)

				//document.getElementById("w1").value = ww2.value;
					ww1.value = ww2.value;
				//console.log("W1現在到底怎麼了="+document.getElementById("w1").value)		
			
				//document.getElementById("w2").value = ww3.value;
					ww2.value = ww3;
				/*console.log("Ww3的值="+ww3.value)
				console.log("W2現在到底怎麼了="+document.getElementById("w2").value)*/
			}
}
function initial(){
	//新增輸入餐點的四個欄位
	var parent=document.getElementById("food").parentNode; //呼叫第19行的P節點以創造其他Input欄位
	for(var i=1;i<=4;i++){
		parent.appendChild(document.createElement("br"));
		parent.appendChild(document.createTextNode("餐點："));
		parent.appendChild(document.createElement("input"));
	}

	//新增ol底下的li
	var p2=document.getElementById("lili").parentNode;
	for(var i=2;i<=5;i++){
		var newli=p2.appendChild(document.createElement("li"));
		newli.appendChild(document.createTextNode("嘿嘿，我是第"+i+"個"));
		console.log(i/2);
		console.log(i%2==0);
		if(i%2==0){
			newli.classList.add("txtGr");
		}else{
			newli.classList.add("txtRd");
		}
	}

	//在網頁一載好時就先去抓右下角顯示時間的div欄位，以顯示時間~
	var m=document.getElementById("mytime");
	showTime();
	
}		
function addFood(){
	var inputs = document.getElementsByTagName("input");
	var list = document.getElementById("list");
	var cnt=0;

	for(var i=2;i<7;i++){
		if(inputs[i].value != ""){
			var txt = document.createTextNode(inputs[i].value);
			var li = document.createElement("li");
			li.appendChild(txt);
			list.appendChild(li);

			cnt++;
			inputs[i].value=""; //按下新增後，會將原本欄位裡的字清空
		}
	}

	if(cnt == 0){
		alert("請輸入餐點~");
	}
	else{
		//document.getElementById("foodnum").innerText=list.children.length;
		$("#foodnum").text($("#list li").length);
	}
}
function showTime(){
	var d = new Date();
	//console.log(d.toLocaleTimeString());
	document.getElementById("mytime").innerHTML=d.toLocaleTimeString();
	setTimeout(showTime,1000);
}
$(document).ready(function () {
	$('#ani').mouseenter(function(){
		$(this).children('img').slideDown(500);
		console.log($(this)); //在此的this指的是li啦!!!哈哈
		$(this).children('img').animate({'height':'0px'},8000); //縮回去的變化時間為8秒
	});

	//利用jQuery在儲存格填入1~9的平方值
	//jQuery世界的for迴圈就是each>> https://api.jquery.com/each/
	$('td').each(function(index){
		//A Callback Function for text(),https://www.w3schools.com/jquery/jquery_dom_set.asp
		$(this).text(function(){
			var num = Math.pow(index+1, 2);
      		return num; 
    	});
	});

	//功能表
	$('#menu').menu();
	//顯示日曆
	$('#calendar').datepicker({
		dateFormat:'yy-m-d',
		showAnim:'fadeIn'
	});
});
function mul(){
	var x1=$('#x1').val();
	var x2=$('#x2').val();
	var ans=x1*x2;
	$('#ans').text(ans);
	if(Math.sign(ans)>0){ //Math.sign()判斷正負，正回傳1，負回傳-1
		console.log(Math.sign(ans));
		$('#ans').removeClass("txtRd");
		$('#ans').addClass("txtGr");
	}else{
		console.log(Math.sign(ans));
		$('#ans').removeClass("txtGr");
		$('#ans').addClass("txtRd");
	}
}
	
