

	//Reg Ex Declaration - Globaly.
	var $FNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
	var $FullNameRegEx = /^([a-zA-Z ]{2,40})$/;
	var $BankAccountNameRegEx = /^([a-zA-Z ]{2,60})$/;
	var $PasswordRegEx = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,12}$/;
	
	var $EmailIdRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
	var $ConNoRegEx = /^([0-9]{10})$/;
	var $AgeRegEx = /^([0-9]{1,2})$/;
	var $AadhaarNoRegEx = /^([0-9]{12})$/;
	var $GSTNoRegEx = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
	var $IndianDrivingLicenseNoRegEx = /^([A-Z]{2,3}[-/0-9]{8,13})$/;
	var $IndianVehicleRegNoRegEx = /^([A-Z]{2}[0-9]{1,2}[A-Z]{1,3}[0-9]{1,4})$/;
	var $PincodeRegEx = /^[1-9][0-9]{5,6}$/;
	var $PANNoRegEx = /^[A-Z]{3}[ABCFGHLJPT][A-Z][0-9]{4}[A-Z]$/;
	var $IFSCCodeRegEx = /^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/;
	var $BankAccountNoRegEx = /^([0-9]{9,18})$/;
	var $LatitudeLongitude = /^(-?(?:1[0-7]|[1-9])?\d(?:\.\d{1,8})?|180(?:\.0{1,8})?)$/;
	
	$(document).ready(function () {
	
		$("#name").blur(function () {
			$("#TxtNameValidation").empty();
			if ($(this).val() == "" || $(this).val() == null) {
				$("#TxtNameValidation").html("(*) Name required..!!");
			}
			else {
				if (!$(this).val().match($FullNameRegEx)) {
					$("#TxtNameValidation").html("(*) Invalid name..!!");
				}
			}
		});
	
		$("#name").keypress(function (e) {
			$("#TxtNameValidation").empty();
			var Flag = ((e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 121));
			if (Flag == false) {
				$("#TxtNameValidation").html("Invalid Input..!!");
			}
			return Flag;
		});
	
		$("#email").blur(function () {
			$("#TxtEmailIdValidation").empty();
			if ($(this).val() == "" || $(this).val() == null) {
				$("#TxtEmailIdValidation").html("(*) Email id required..!!");
			}
			else {
				if (!$(this).val().match($EmailIdRegEx)) {
					$("#TxtEmailIdValidation").html("(*) Invalid email id..!!");
				}
			}
		});
	
	
		$("#subject").blur(function () {
			$("#TxtNameValidation1").empty();
			if ($(this).val() == "" || $(this).val() == null) {
				$("#TxtNameValidation1").html("(*) Subject required..!!");
			}
			else {
				if (!$(this).val().match($FullNameRegEx)) {
					$("#TxtNameValidation1").html("(*) Invalid Subject..!!");
				}
			}
		});
	
		$("#subject").keypress(function (e) {
			$("#TxtNameValidation1").empty();
			var Flag = ((e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 121));
			if (Flag == false) {
				$("#TxtNameValidation1").html("Invalid Input..!!");
			}
			return Flag;
		});
	
		$("#massage").blur(function () {
			$("#TxtContactMsgValidation").empty();
			if ($(this).val() == "" || $(this).val() == null) {
				$("#TxtContactMsgValidation").html("(*) Message required..!!");
			}
			else {
				if ($("#massage").val().length > 300) {
					$("#TxtContactMsgValidation").html("(*) Invalid message..!!");
				}
			}
		});
	
		var TxtNameFlag = false, TxtEmailIdFlag = false, TxtNameFlag1 = false, TxtContactMsgFlag = false;
	
		$("#BtnSubmit").click(function () {
			$("#TxtNameValidation").empty();
			if ($("#name").val() == "" || $("#name").val() == null) {
				$("#TxtNameValidation").html("(*) Name required..!!");
				TxtNameFlag = false;
			}
			else {
				if (!$("#name").val().match($FullNameRegEx)) {
					$("#TxtNameValidation").html("(*) Invalid name..!!");
					TxtNameFlag = false;
				}
				else {
					TxtNameFlag = true;
				}
			}
			$("#TxtEmailIdValidation").empty();
			if ($("#email").val() == "" || $("#email").val() == null) {
				$("#TxtEmailIdValidation").html("(*) Email id required..!!");
				TxtEmailIdFlag = false;
			}
			else {
				if (!$("#email").val().match($EmailIdRegEx)) {
					$("#TxtEmailIdValidation").html("(*) Invalid email id..!!");
					TxtEmailIdFlag = false;
				}
				else {
					TxtEmailIdFlag = true;
				}
			}
			$("#TxtNameValidation1").empty();
			if ($("#subject").val() == "" || $("#subject").val() == null) {
				$("#TxtNameValidation1").html("(*) Subject required..!!");
				TxtNameFlag = false;
			}
			else {
				if (!$("#subject").val().match($FullNameRegEx)) {
					$("#TxtNameValidation1").html("(*) Invalid Subject..!!");
					TxtNameFlag1 = false;
				}
				else {
					TxtNameFlag1 = true;
				}
			}
			$("#TxtContactMsgValidation").empty();
			if ($("#massage").val() == "" || $("#massage").val() == null) {
				$("#TxtContactMsgValidation").html("(*) Message is required..!!");
				TxtContactMsgFlag = false;
			}
			else {
				if ($("#massage").val().length > 300) {
					$("#TxtContactMsgValidation").html("(*) Invalid  message..!!");
					TxtContactMsgFlag = false;
				}
				else {
					TxtContactMsgFlag = true;
				}
			}
			if (TxtNameFlag == true && TxtContactNoFlag == true && TxtEmailIdFlag == true && TxtContactMsgFlag == true) {
				$("input,textarea").val("");
				alert("Form submitted successfully..!!");
			}
			else {
				alert("Invalid Input..!!");
			}
		});
	
	});
	
	