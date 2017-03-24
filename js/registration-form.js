//function to help referencing
function $(id){
	var element = document.getElementById(id);
	if( element == null ){
		alert( 'Programmer error: ' + id + 'does not exist.');
	}
	return element;
}

/*Login & signup page Validation*/

/***Login***/
//Username validation
function testNameBlankL(id){
	if($(id).value.trim().length != 0){
		return true;
	}else{
		return false;
	}
}
function testNameValidL(id){
	var nameFormat = /^[\w]{1,15}$/;
	if($(id).value.trim().match(nameFormat)){
		return true;
	}else{
		return false;
	}
}
function warnNameValidL(id){
	if(!testNameBlankL(id)){
		$("alertUserNameL").style.visibility = "visible";
		return false;
	}else if(!testNameValidL(id)){
		$("alertUserNameL").innerHTML = "1-15 letters,only A-Z,a-z,0-9 & \"_\"";
		$("alertUserNameL").style.visibility = "visible";
		return false;
	}else{
		$("alertUserNameL").style.visibility = "hidden";
		return true;
	}
}
//Password validation
function testPasswordBlankL(id) {
	var password = $(id).value.trim();
	if(password != 0){
		return true;
	}else{
		return false;
	}
}
function testPasswordValidL(id) {
	var password = $(id).value.trim();
	var passwordTest = /^[\w]{6,10}$/;
	if(password.match(passwordTest)){
		return true;
	}else{
		return false;
	}
}
function warnPasswordValidL(id){
	if(!testPasswordBlankL(id)){
		$("alertPasswordL").style.visibility = "visible";
		return false;
	}else if(!testPasswordValidL(id)){
		$("alertPasswordL").innerHTML = "6-10letters,only A-Z,a-z,0-9 & \"_\"";
		$("alertPasswordL").style.visibility = "visible";
		return false;
	}else{
		$("alertPasswordL").style.visibility = "hidden";
		return true;
	}
}
//Validation Check all values when user submit:for login page
function loginSubmitValid() {
	var ret = true;
	if(!(warnNameValidL('username'))){
		ret = false;
	}if(!(warnPasswordValidL('password'))){
		ret = false;
	}
	return ret;

}
function SubmitLogin() {
	if(!loginSubmitValid()){
		return false;
	}else {
		return true;
		document.loginForm.submit();
	}

}

/***Signup***/

//Username validation
function testNameBlank(id){
	if($(id).value.trim().length != 0){
		return true;
	}else{
		return false;
	}
}
function testNameValid(id){
	var nameTest = /^[\w]{1,15}$/;
	if($(id).value.trim().match(nameTest)){
		return true;
	}else{
		return false;
	}
}
function warnNameValid(id){
	if(!testNameBlank(id)){
		$("alertUserName").style.visibility = "visible";
		return false;
	}else if(!testNameValid(id)){
		$("alertUserName").innerHTML = "1-15 letters,only A-Z,a-z,0-9 & \"_\"";
		$("alertUserName").style.visibility = "visible";
		return false;
	}else{
		$("alertUserName").style.visibility = "hidden";
		return true;
	}
}

//E-mail validation
function testEmailBlank(id) {
	var email = $(id).value.trim();
	if(email != 0){
		return true;
	}else{
		return false;
	}
}
function testEmailValid(id) {
	var email = $(id).value.trim();
	var emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if( email.match(emailFormat)){
		return true;
	}else{
		return false;
	}
}
function warnEmailValid(id) {
	if(!testEmailBlank(id)){
		$("alertEmail").style.visibility = "visible";
		return false;
	}else if(!testEmailValid(id)){
		$("alertEmail").innerHTML = "Invalid e-mail adress";
		$("alertEmail").style.visibility = "visible";
		$(id).className = 'invalidForm';
		return false;
	}else{
		$("alertEmail").style.visibility = "hidden";
		return true;
	}
}

//Password validation
function testPasswordBlank(id) {
	var password = $(id).value.trim();
	if(password != 0){
		return true;
	}else{
		return false;
	}
}
function testPasswordValid(id) {
	var password = $(id).value.trim();
	var passwordTest = /^[\w]{6,10}$/;
	if(password.match(passwordTest)){
		return true;
	}else{
		return false;
	}
}
function warnPasswordValid(id){
	if(!testPasswordBlank(id)){
		$("alertPassword").style.visibility = "visible";
		return false;
	}else if(!testPasswordValid(id)){
		$("alertPassword").innerHTML = "6-10 letters, only use A-Z,a-z,0-9 & \"_\"";
		$("alertPassword").style.visibility = "visible";
		return false;
	}else{
		$("alertPassword").style.visibility = "hidden";
		return true;
	}
}

//Validation Check all values when user submit :for sign up page
function testSubmitValid() {
	var ret = true;
	if(!(warnNameValid('reguser'))){
		ret = false;
	}

	if(!(warnEmailValid('email'))){
		ret = false;
	}

	if(!(warnPasswordValid('regpassword'))){
		ret = false;
	}
	return ret;

	if(!(warnPasswordConValid('passwordCon'))){
		ret = false;
	}
	return ret;
}
function submitSignup(){
	if(!testSubmitValid()){
		return false;
	}else {
		return true;
		document.signupForm.submit();
	}
}

/***Contact form***/
//FristName validation
function testFirstNameBlank(id){
	if($(id).value.trim().length != 0){
		return true;
	}else{
		return false;
	}
}
function testFirstNameValid(id){
	var regexNum = /\d/g;
	var a = $(id).value;
	var c = regexNum.test(a);
	if(c)
	return false;
	else{
		return true;
	}
}
function warnFirstNameValid(id){
	if(!testFirstNameBlank(id)){
		$("alertFirstName").style.visibility = "visible";
		return false;
	}else if(!testFirstNameValid(id)){
		$("alertFirstName").innerHTML = "1-10 letters,only A-Z,a-z";
		$("alertFirstName").style.visibility = "visible";
		return false;
	}else{
		$("alertFirstName").style.visibility = "hidden";
		$(id).className = '';
		return true;
	}
}
//LastName validation
function testLastNameBlank(id){
	if($(id).value.trim().length != 0){
		return true;
	}else{
		return false;
	}
}
function testLastNameValid(id){
	var regexNum = /\d/g;
	var a = $(id).value;
	var c = regexNum.test(a);
	if(c)
	return false;
	else{
		return true;
	}
}
function warnLastNameValid(id){
	if(!testLastNameBlank(id)){
		$("alertLastName").style.visibility = "visible";
		return false;
	}else if(!testLastNameValid(id)){
		$("alertLastName").innerHTML = "1-10 letters,only A-Z,a-z";
		$("alertLastName").style.visibility = "visible";
		return false;
	}else{
		$("alertLastName").style.visibility = "hidden";
		return true;
	}
}
//E-mail validation
function testEmailConBlank(id) {
	var email = $(id).value.trim();
	if(email != 0){
		return true;
	}else{
		return false;
	}
}
function testEmailConValid(id) {
	var email = $(id).value.trim();
	var emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if( email.match(emailFormat)){
		return true;
	}else{
		return false;
	}
}
function warnEmailConValid(id) {
	if(!testEmailConBlank(id)){
		$("alertConEmail").style.visibility = "visible";
		return false;
	}else if(!testEmailConValid(id)){
		$("alertConEmail").innerHTML = "Invalid e-mail adress";
		$("alertConEmail").style.visibility = "visible";
		return false;
	}else{
		$("alertConEmail").style.visibility = "hidden";
		return true;
	}
}
//Textarea validation
function testTextareaBlank(id) {
	var textArea = $(id).value.trim();
	if(textArea != 0){
		return true;
	}else{
		return false;
	}
}
function warnTextareaBlank(id) {
	if(!testTextareaBlank(id)){
		$("alertTextarea").style.visibility = "visible";
		return false;
	}else{
		$("alertTextarea").style.visibility = "hidden";
		return true;
	}
}

//Validation Check all values when user submit :for sign up page
function testSubmitConValid() {
	var ret = true;
	if(!(warnFirstNameValid('fname'))){
		ret = false;
	}

	if(!(warnLastNameValid('lname'))){
		ret = false;
	}

	if(!(warnEmailConValid('emailCon'))){
		ret = false;

	}
	if(!(warnTextareaBlank('comment'))){
		ret = false;
	}
	return ret;

}
function submitContact(){
	if(!testSubmitConValid()){
		return false;
	}else {
		return true;
		document.inputForm.submit();
	}
}
