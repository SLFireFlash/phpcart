const adminDiv = document.getElementById("admin-div")
const reqBtn = document.getElementById("admin-token-req")

function adminLogIn(){
    adminDiv.removeAttribute("class")
    reqBtn.setAttribute("class","hide-ele")
}