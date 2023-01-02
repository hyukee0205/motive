$(function () {
	// p(+)버튼을 클릭하면 해당 열에 있는 인풋에 숫자 증가
	$(".p").click(function () {
		var cnt = $(".cnt");
		var v = cnt.val();
		v++;
		cnt.val(v);

		var o = $(".o").text();
		var cDel = numberWithCommas(o);
		var sum = $(".sumNum");
		var total = parseInt(cDel * cnt.val());

		sum.text(comma(total));
		calc();
	});

	// m(-)버튼을 클릭하면 해당 열에 있는 인풋에 숫자 감소
	$(".m").click(function () {
		var cnt = $(".cnt");
		var v = cnt.val();
		// 숫자제한
		if (v == 1) {
			alert("1보다 작을 수 없습니다.");
		} else {
			v--;
		}
		cnt.val(v);

		var o = $(".o").text();
		var cDel = numberWithCommas(o);
		var sum = $(".sumNum");
		var total = parseInt(cDel * cnt.val());

		sum.text(comma(total));
		calc();
	});


	// 콤마 넣기
	function comma(num) {
		return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

	// 인풋이 증감 할때마다 합계에 값이 바뀜
	function calc() {
		var p = $(".sumNum").length;
		var total = 0;
		for (i = 0; i < p; i++) {
			total += parseInt(numberWithCommas($(".sumNum").eq(i).text()));
			// 콤마를 제거한 값이 문자열로 바뀌기 때문에 정수로 바꿔줌
		}
		$(".total").text(comma(total));
	}

	//콤마 제거
	function numberWithCommas(x) {
		return x.toString().replace(/,/g, "");
	}

	$(".re").click(function () {
		location.reload();
	});
});

















	// .del버튼을 누르면 열 삭제되고 계산
	// $(".del").click(function () {
	// 	$(this).parents("tr").remove();
	// 	calc();
	// });

	// label[for=all]를 누르면 체크박스 상테에 따라 전체 체크
	// $("label[for=all]").click(function () {
	// 	if ($(this).siblings().prop("checked")) {
	// 		$("input[name=se]").prop("checked", true);
	// 	} else {
	// 		$("input[name=se]").prop("checked", false);
	// 	}
	// });

	// .allDel를 누르면 tbody안에 tr전체 삭제하고 계산
	// $(".allDel").click(function () {
	// 	$("tbody").children("tr").remove();
	// 	calc();
	// });
