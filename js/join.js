
// 체크박스

function checkSelectAll(checkbox) {
  const selectall
    = document.querySelector('input[name="selectall"]');

  if (checkbox.checked === false) {
    selectall.checked = false;
  };
};

function selectAll(selectAll) {
  const checkboxes
    = document.getElementsByName('sub_chk');

  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAll.checked
  })
};


function checkSelectAll() {
  // 전체 체크박스
  const checkboxes
    = document.querySelectorAll('input[name="apply"]');
  // 선택된 체크박스
  const checked
    = document.querySelectorAll('input[name="apply"]:checked');
  // select all 체크박스
  const selectAll
    = document.querySelector('input[name="selectall"]');

  if (checkboxes.length === checked.length) {
    selectAll.checked = true;
  } else {
    selectAll.checked = false;
  };

};

function selectAll(selectAll) {
  const checkboxes
    = document.getElementsByName('apply');

  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAll.checked
  })
};









var u_id = document.getElementById("u_id");
var pwd = document.getElementById("pwd");
var repwd = document.getElementById("repwd");
var u_name = document.getElementById("u_name");
var email = document.getElementById("email");
var mobile = document.getElementById("mobile");
var ps_code = document.getElementById("ps_code");
var birth = document.getElementById("birth");
var selectall = document.getElementById("selectall");
var apply_1 = document.getElementById("apply_1");
var apply_2 = document.getElementById("apply_2");




var err_id = document.getElementById("err_id");
var err_pwd = document.getElementById("err_pwd");
var err_repwd = document.getElementById("err_repwd");
var err_name = document.getElementById("err_name");
var err_email = document.getElementById("err_email");
var err_mobile = document.getElementById("err_mobile");
var err_mobile_2 = document.getElementById("err_mobile_2");
var err_ps_code = document.getElementById("err_ps_code");
var err_birth = document.getElementById("err_birth");
var err_birth_2 = document.getElementById("err_birth_2");
var err_apply = document.getElementById("err_apply");






var reg = /^[0-9]+$/g;




u_id.onkeyup = function () {
  if (!u_id.value) {
    err_id.classList.remove('hide')
  } else {
    err_id.classList.add('hide')
  }
}



pwd.onkeyup = function () {

  var pwd_len = pwd.value.length;

  if (pwd_len < 4 || pwd_len > 8) {
    err_pwd.classList.remove('hide')
  } else {
    err_pwd.classList.add('hide')
  }
}


repwd.onkeyup = function () {
  if (pwd.value != repwd.value) {
    err_repwd.classList.remove('hide')
  } else {
    err_repwd.classList.add('hide')
  }
}


u_name.onkeyup = function () {
  if (!u_name.value) {
    err_name.classList.remove('hide')
  } else {
    err_name.classList.add('hide')
  }
}



email.onkeyup = function () {
  if (!email.value) {
    err_email.classList.remove('hide')
  } else {
    err_email.classList.add('hide')
  }
}



mobile.onkeyup = function () {
  if (!mobile.value) {
    err_mobile.classList.remove('hide')
    err_mobile_2.classList.add('hide')
  } else if (!reg.test(mobile.value)) {
    err_mobile.classList.add('hide')
    err_mobile_2.classList.remove('hide')
  } else if (reg.test(mobile.value)) {
    err_mobile_2.classList.add('hide')
  } else {
    err_mobile.classList.add('hide')
  }
}


birth.onkeyup = function () {
  if (!birth.value) {
    err_birth.classList.remove('hide')
    err_birth_2.classList.add('hide')
  } else if (!reg.test(birth.value)) {
    err_birth.classList.add('hide')
    err_birth_2.classList.remove('hide')
  } else if (reg.test(birth.value)) {
    err_birth_2.classList.add('hide')
  } else {
    err_birth.classList.add('hide')
  }
}


function form_check() {

  var pwd_len = pwd.value.length;
  var reg = /^[0-9]+$/g;




  if (!u_id.value) {
    err_id.classList.remove('hide')
    u_id.focus();
    return false;
  };


  if (pwd_len < 4 || pwd_len > 8) {
    err_pwd.classList.remove('hide')
    pwd.focus();
    return false;
  };

  if (pwd.value != repwd.value) {
    err_repwd.classList.remove('hide')
    repwd.focus();
    return false;
  };

  if (!u_name.value) {
    err_name.classList.remove('hide')
    u_name.focus();
    return false;
  };

  if (!email.value) {
    err_email.classList.remove('hide')
    email.focus();
    return false;
  };

  if (!mobile.value) {
    err_mobile.classList.remove('hide')
    mobile.focus();
    return false;
  }

  if (!reg.test(mobile.value)) {
    err_mobile_2.classList.remove('hide')
    mobile.focus();
    return false;
  }


  if (!ps_code.value) {
    err_ps_code.classList.remove('hide')
    ps_code.focus();
    return false;
  }



  if (!birth.value) {
    err_birth.classList.remove('hide')
    birth.focus();
    return false;
  }


  var reg = /^[0-9]+$/g;

  if (!reg.test(birth.value)) {
    err_birth_2.classList.remove('hide')
    birth.focus();
    return false;
  }


  if (!apply_1.checked || !apply_2.checked) {
    err_apply.classList.remove('hide')
    selectall.focus();
    return false;
  };


}




function findAddr() {
  new daum.Postcode({
    oncomplete: function (data) {

      console.log(data);

      var roadAddr = data.roadAddress;
      var jibunAddr = data.jibunAddress;
      document.getElementById('ps_code').value = data.zonecode;
      if (roadAddr !== '') {
        document.getElementById("addr_b").value = roadAddr;
      }
      else if (jibunAddr !== '') {
        document.getElementById("addr_b").value = jibunAddr;
      }
    }
  }).open();
}




