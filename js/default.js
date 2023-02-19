window.onload = function(){

	// formの最初のelementにfocusする
	if(document.forms[0] && document.forms[0].elements[0]){
		document.forms[0].elements[0].focus();
	}

	// focus指定があればそちらにfocusする
	if(document.getElementById('focus')){
		document.getElementById('focus').focus();
	}

	// dispabledのinputをdisabledにする
	if(document.getElementsByClassName("disabled")){

		var divs = document.getElementsByClassName("disabled");
		for(var n=0;n<divs.length;n++){

			var div = divs[n];

			var input_tags = div.getElementsByTagName("input");
			for(var i=0;i<input_tags.length;i++){
				input_tags[i].disabled = true;
			}

			var input_tags = div.getElementsByTagName("select");
			for(var i=0;i<input_tags.length;i++){
				input_tags[i].disabled = true;
			}

			var input_tags = div.getElementsByTagName("textarea");
			for(var i=0;i<input_tags.length;i++){
				input_tags[i].disabled = true;
			}

			// checkedでないtagを非表示にする
			objs = div.getElementsByTagName("input");
			for(var i=0; i<objs.length; i++){
				type = objs[i].type;
				if(type == "radio" || type == "checkbox" || type == "file" || type == "button") objs[i].style.display = "none";
				if(type != "radio" && type != "checkbox") continue;
				if(objs[i].checked == false){
					if(objs[i].nextSibling && objs[i].nextSibling.tagName == "LABEL") objs[i].nextSibling.style.display = "none";
				}
			}

		}

	}

	// テキストエリアの高さ自動調整
	var els = document.getElementsByTagName('textarea');
	for (var i = 0; i < els.length; i++){
		var obj = els[i];
		resize(obj);
		obj.onkeyup = function(){ resize(this); }
	}

}

// テキストエリアの高さ自動調整
function resize(Tarea){
	var areaH = Tarea.style.height;
	areaH = parseInt(areaH) - 54;
	if(areaH < 30){ areaH = 30; }
	Tarea.style.height = areaH + "px";
	Tarea.style.height = parseInt(Tarea.scrollHeight + 30) + "px";
}

// スクロールを同期
function syncscroll(i){
	document.getElementsByClassName("scl")[(Math.abs(i-1))].scrollLeft = document.getElementsByClassName("scl")[i].scrollLeft;
}

function check_contactform() {
	var name = $('input[name="name"]').val();
	var furigana = $('input[name="furigana"]').val();
	var address = $('input[name="address"]').val();
	// var tel = $('input[name="tel"]').val();
	var otoiawase = $('textarea[name="otoiawase"]').val();
	var errmsg = "";
	if(name == "") {
		errmsg = "お名前を入力して下さい\n";
	}
	if(furigana == "") {
		errmsg = errmsg + "フリガナを入力して下さい\n";
	}
	if(address == "") {
		errmsg = errmsg + "メールアドレスを入力して下さい\n";
	}
	if(!address.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
		errmsg = errmsg + "メールアドレスをご確認下さい\n";
	}
	// if(tel == "") {
	// 	errmsg = errmsg + "電話番号を入力して下さい\n";
	// }
	if(otoiawase == "") {
		errmsg = errmsg + "お問い合わせ内容を入力して下さい\n";
	}
	if(errmsg != "") {
		alert(errmsg);
		return false;
	}
	$('form[name="myform"]').submit();
}

jQuery(function($) {
$('.thumb-item').slick({
infinite: true,
autoplay: true,
slidesToShow: 1,
slidesToScroll: 1,
arrows: true,
fade: true,
autoplaySpeed: 10000,
speed: 400,
lazyLoad: 'progressive',
asNavFor: '.thumb-item-nav',
});
$('.thumb-item-nav').slick({
accessibility: true,
arrows: false,
infinite: false,
slidesToShow: 6,
slidesToScroll: 1,
asNavFor: '.thumb-item',
focusOnSelect: true,
});
});

