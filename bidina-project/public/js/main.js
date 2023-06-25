const name = document.getElementById("name");
const name_err = document.getElementById("name_err");
const email = document.getElementById("email");
const email_err = document.getElementById("email_err");
const phone = document.getElementById("phone");
const phone_err = document.getElementById("phone_err");
const adress = document.getElementById("adress");
const adress_err = document.getElementById("adress_err");

const submit = document.getElementById("submit");

submit.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
   
});
 
function validate(){

    // validate name
    if (name.value == "") {
        name.setAttribute("style", "color:red; border: 1px red solid ;");
        name_err.innerText = "Please Enter Your Name"
        name_err.setAttribute("style", "color:red;font-size:13px;");
    } else {
        name.setAttribute("style", "color:black; border: 1px green solid ;");
        name_err.innerText = "";
    }

    // validate email
    if (email.value == "") {
        email.setAttribute("style", "color:red; border: 1px red solid ;");
        email_err.innerText = "Please Enter Your Email"
        email_err.setAttribute("style", "color:red;font-size:13px;");
    } else {
        email.setAttribute("style", "color:black; border: 1px green solid ;");
        email_err.innerText = "";
    }

    // validate phone
    if (phone.value == "") {
        phone.setAttribute("style", "color:red; border: 1px red solid ;");
        phone_err.innerText = "Please Enter Your Phone"
        phone_err.setAttribute("style", "color:red;font-size:13px;");
    } else {
        phone.setAttribute("style", "color:black; border: 1px green solid ;");
        phone_err.innerText = "";
    }

    // validate adress
    if (adress.value == "") {
        adress.setAttribute("style", "color:red; border: 1px red solid ;");
        adress_err.innerText = "Please Enter Your Adress"
        adress_err.setAttribute("style", "color:red;font-size:13px;");
    } else {
        adress.setAttribute("style", "color:black; border: 1px green solid ;");
        adress_err.innerText = "";
    }

}

if(validate()){
    return true;
}
else{
    return false;
}