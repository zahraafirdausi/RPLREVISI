const inputs = document.querySelectorAll(".input");
const x = document.getElementById("login");
const y = document.getElementById("register");
const z = document.getElementById("btn");
var btnContainer = document.getElementById("button-box");
var btns = btnContainer.getElementsByClassName("toggle-btn");
var checkemail = document.getElementById("email");
var checkemaill = document.getElementById("email_regis");
var checknama = document.getElementById("nama_lengkap");
var checkalamat = document.getElementById("alamat");
var checkusername = document.getElementById("username");

for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function() {
	  var current = document.getElementsByClassName("active");
	  current[0].className = current[0].className.replace(" active", "");
	  this.className += " active";
	});
}

function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

if (checkemail.value.length) {
	checkemail.parentNode.parentNode.classList.add("focus");
}
if (checkemaill.value.length) {
	checkemaill.parentNode.parentNode.classList.add("focus");
}
if (checkalamat.value.length) {
	checkalamat.parentNode.parentNode.classList.add("focus");
}
if (checknama.value.length) {
	checknama.parentNode.parentNode.classList.add("focus");
}
if (checkusername.value.length) {
	checkusername.parentNode.parentNode.classList.add("focus");
}

function register() {
	x.style.left = "-400px";
	y.style.left = "50px";
	z.style.left ="110px"
}

function login() {
	x.style.left = "50px";
	y.style.left = "450px";
	z.style.left ="0px"
}