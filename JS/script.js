function signup(){
    
    var fname = document.getElementById("firstname")
    var lname = document.getElementById("lastname")
    var email = document.getElementById("email")
    var mobile = document.getElementById("mobile")
    var username = document.getElementById("username")
    var password = document.getElementById("password")


    var f = new FormData();

    f.append("f",fname.value);
    f.append("l",lname.value);
    f.append("e",email.value);
    f.append("m",mobile.value);
    f.append("u",username.value);
    f.append("p",password.value);


    var request = new XMLHttpRequest();

    request.onreadystatechange = function (){
        if (request.readyState == 4 & request.status == 200 ){
            var response =  request.responseText;
            alert(response);
        }

    };

    request.open("POST","signupprocess.php",true);
    request.send(f)
    




}