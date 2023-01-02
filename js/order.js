var card = document.getElementById("card");
var money = document.getElementById("money");
var phone = document.getElementById("phone");
var naver = document.getElementById("naver");


var err_pay = document.getElementById("err_pay");



function form_check() {

  if (!card.checked && !money.checked && !phone.checked && !naver.checked) {
    window.alert("결제 방식을 체크해 주세요.");
    card.focus();
    return false;
  };

}
