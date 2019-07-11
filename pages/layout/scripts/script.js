/*
var $fname = document.myform.firstname.value;
var $lname = document.myform.lastname.value;
var $uname = document.myform.username.value;
var $pass = document.myform.password.value;
var $idnum = document.myform.idnumber.value;
var $age = document.myform.age.value;
var $gender = document.myform.gender.value;
var $phone = document.myform.phone.value;
var $email = document.myform.email.value;
var $date = document.myform.date.value;
*/
function validUser(){
var $uname = document.myform.username.value;
if($uname==""){
alert("username is empty");
}
else{
if($uname.length!=7 || $uname.length<7){
alert("username must have 7 or more characters");
}
}
}

function validPassword(){
var $pass =document.myform.password.value;
if($pass==""){
alert("password is empty");
}
else{
if($pass.length!=10 || $pass.length <10){
alert("password must have more than 10 characters");
}else{

if(isNaN($pass)){
alert("you may proceed");
}
else{
alert("password cannot be all numbers");
}
}
}
}

function validSubmit(){
var $uname =document.myform.username.value;
var $pass =document.myform.password.value;
if($uname=="" || $pass==""){
alert("either username or password or both are blank");
} 
}