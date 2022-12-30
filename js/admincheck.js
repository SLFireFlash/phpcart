const tc = document.querySelector('#isAdminCheck');
const adminDiv = document.getElementById("admin-div")
const reqBtn = document.getElementById("admin-token-req")

function adminCheck(){
    let tikCheck = tc.checked;
    console.log(tikCheck);
}
function adminLogIn(){
    adminDiv.removeAttribute("class")
    reqBtn.setAttribute("class","hide-ele")
}