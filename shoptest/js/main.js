var objPeople = [
	{ // Object @ 0 index
		username: "admin",
		password: "admin"
	},
	{ // Object @ 1 index
		username: "staff",
		password: "staff"
	}


]

function getInfo() {
	var username = document.getElementById('username').value
	var password = document.getElementById('password').value
		for(var i = 0; i < objPeople.length; i++) {
		if(username == objPeople[i].username && password == objPeople[i].password) {

			if (username == "admin", password == "admin"){
				open("admin.php")
			}
			else if (username == "staff", password == "staff"){
				open("staff.php")
			}
			// stop the function if this is found to be true
			return
		}
	}
	alert("incorrect username or password")
}