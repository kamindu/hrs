function validatingStaff(epf,nic,phone){
alert("wwww")
if (ValidatingStaffID(epf)){
if (ValidatingNIC(nic)){
if(MobileNumberValidation(phone)){
alert("Your data was successfully validated.");
return true;
}
return false;
}
return false;
}
return false;
}


//End of the Students main function

//Validating National Identity Card Number
function ValidatingStaffID(epf){
//alert("qqqq")
var ID=$("#"+epf).val();
var EPFnumber=/^\w\d{5}$/;
if(!EPFnumber.test(ID)){
alert("Your EPF number is not valid. eg: G00001 ");
return false;
}
else
return true;
}

function ValidatingNIC(nic){
//alert ("AAAAAAAAAAAAA");
var NationalICN=$('#'+nic).val();
var NICValid=/^\d{9}V/;
if (!NICValid.test(NationalICN)){
alert ("Your NIC Number is invalid eg: 123456789V");
return false;
}
else
return true;
}



function MobileNumberValidation(phone){

var ID=$("#"+phone).val();
var IMnumber=/^\d{10}$/;
if(!IMnumber.test(ID)){
alert("Your Mobile Number is not valid ");
return false;
}
else
return true;
}

