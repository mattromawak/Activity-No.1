function inputData(){
    
    let fName = document.getElementById("firstname").value;
    let lName = document.getElementById("lastname").value;
    let uName = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let pword = document.getElementById("password").value;

    localStorage.setItem("firstname", fName);
    localStorage.setItem("lastname", lName);
    localStorage.setItem("username", uName);
    localStorage.setItem("email", email);
    localStorage.setItem("password", pword);
    
    alert("Successfully stored data!");
}