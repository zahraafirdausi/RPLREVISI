const inputs = document.querySelectorAll(".input");
const x = document.getElementById("login");
const y = document.getElementById("register");
const z = document.getElementById("btn");
var btnContainer = document.getElementById("button-box");
var btns = btnContainer.getElementsByClassName("toggle-btn");

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