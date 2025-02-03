function validationForm() {
    var fname = document.getElementById("First_Name").value;
    var lname = document.getElementById("Last_Name").value;
    var pwd1 = document.getElementById("password1").value;
    var pwd2 = document.getElementById("password2").value;
    var email = document.getElementById("emailid").value;
    var mb = document.getElementById("mob").value;
    var m = document.getElementById("genmale").checked;
    var f = document.getElementById("genfemale").checked;
    var o = document.getElementById("geno").checked;
    var cb = document.getElementById("q1").checked;
    var cm = document.getElementById("q2").checked;
    var cd = document.getElementById("q3").checked;
    var cat = document.getElementById("cat1").checked;
    var im = document.getElementById("img").checked;
    var txt = document.getElementById("textarea").checked;
    var check = document.getElementById("rem").checked;

    if (fname=="") {
        alert("Please Enter Your First Name!");
        return false;
        
    }
    if (!isNaN(fname)) {
        alert("Please Enter Valid Name");
        document.getElementById("First_Name").value;
        document.getElementById("First_Name").focus();
        return false;
        
    }
    if (fname.length<3) {
        alert("Please Enter 3 Character Long First Name!");
        document.getElementById("First_Name").value;
        document.getElementById("First_Name").focus();
        return false
        
    }
//     if (lname=="") {
//         alert("Please Enter Your Last Name!");
//         document.getElementById("Last_Name").focus();
//         return false;
        
//     }
//     if (!isNaN(lname)) {
//         alert("Please Enter Valid Name");
//         document.getElementById("Last_Name").value="";
//         document.getElementById("Last_Name").focus();
//         return false;
        
//     }
//     if (lname.length<3) {
//         alert("Please Enter 3 Character Long Last Name!");
//         document.getElementById("Last_Name").value="";
//         document.getElementById("Last_Name").focus();
//         return false
        
//     }
//     //Password Empty Validation
//     if (pwd1=="") {
//         alert("Please Enter Your Password!");
//         document.getElementById("password1").focus();
//         return false;
        
//     }
//     //Password Length Validation
//     if (pwd1.length<8) {
//         alert("Please Enter Atleast 8 Symbol Long Last Name!");
//         document.getElementById("password1").value="";
//         document.getElementById("password1").focus();
//         return false
        
//     }
//     //Password Regular Expression Validation -Atleast One Lower Case Alphabet
//     if (!pwd1.match("[a-z]")) {
//         alert("Password Must Contain Atleast Single Lowercase Alphabet!");
//         document.getElementById("password1").value="";
//         document.getElementById("password1").focus();
//         return false
        
//     }
//     //Password Regular Expression Validation -Atleast One Digit
//     if (!pwd1.match("[0-9]")) {
//         alert("Password Must Contain Atleast A Single Digit!");
//         document.getElementById("password1").value="";
//         document.getElementById("password1").focus();
//         return false
        
//     }
//     //Password Regular Expression Validation -Atleast One Special Symbol
//     if (!pwd1.match("[@#$%^]")) {
//         alert("Password Must Contain Atleast A Single Special Symbol!");
//         document.getElementById("password1").value="";
//         document.getElementById("password1").focus();
//         return false
        
//     }
//     //Re-Enter Password Empty Validation
//     if (pwd2=="") {
//         alert("Please Enter Re-Enter Password!");
//         document.getElementById("password2").focus();
//         return false;
        
//     }
//     //Password Confirmation Validation
//     if (!(pwd2=="pwd1")) {
//         alert("Password And Confirm Password Does't Match!");
//         document.getElementById("password2").focus();
//         return false;
        
//     }


//     //Check minimum valid length of n email
//     if (email.length<=2) {
//         alert("Email ID Must be upto 3 character / Symbol!");
//         document.getElementById("emailid").value="";
//         document.getElementById("emailid").focus();
//         return false;
        
//     }

//     //if wheather email has @ character
//     if (email.indexOf('@')== -1) {
//         alert("Email Must have @ character!");
//         document.getElementById("emailid").value="";
//         document.getElementById("emailid").focus();
//         return false;
//     }
//     if (email.indexOf('.')- email.indexOf('@')<2) {
//         alert("Invalid Email ID Re-Enter...");
//         document.getElementById("emailid").value="";
//         document.getElementById("emailid").focus();
//         return false;
//     }

//     // Mobile
//     if(mb==""){
//         alert("Please Enter Your Mobile Number");
//         document.getElementById("mob").value="";
//         document.getElementById("mob").focus();
//         return false;
//     }
//     if(mb.length!=10){
//         alert("Please Enter Atleast 10 Digit");
//         document.getElementById("mob").value="";
//         document.getElementById("mob").focus();
//         return false;
//     }
//     if(mb.match("[A-Z]")){
//         alert("Please Enter Valid Mobile Number");
//         document.getElementById("mob").value="";
//         document.getElementById("mob").focus();
//         return false;
//     }
//     if(mb.match("[a-z]")){
//         alert("Please Enter Valid Mobile Number");
//         document.getElementById("mob").value="";
//         document.getElementById("mob").focus();
//         return false;
//     }
//     if(mb.match("[!@#$%^&*]")){
//         alert("Please Enter Your Mobile Number");
//         document.getElementById("mob").value="";
//         document.getElementById("mob").focus();
//         return false;
//     }
//     if(mb.charAt("0")!=9 && mb.charAt("0")!=8 && mb.charAt("0")!=7){
//         alert("Please Enter Valid Number");
//         document.getElementById("mob").value="";
//         document.getElementById("mob").focus();
//         return false;
//     }

//     // Gender
//     if(m==false && f==false && o==false){
//         alert("Please Check the Gender");
//         document.getElementById("genmale").focus();
//         return false;
//     }

//     // Qualification
//     if(cb==false && cm==false && cd==false){
//         alert("Please Check the Qualification");
//         document.getElementById("q1").focus();
//         return false;
//     }

//     // Category
//     if(cat == ""){
//         alert("Please Select Category");
//         document.getElementById("cat1").focus();
//         return false;
//     }

//     // Image
//     if(im==""){
//         alert("Please Select Image");
//         document.getElementById("img").value="";
//         document.getElementById("img").focus();
//         return false;
//     }

//     // About You
//     if(txt==""){
//         alert("Please Fill Your About");
//         document.getElementById("txtarea").value="";
//         document.getElementById("txtarea").focus();
//         return false;
//     }

//     // Remember Me
//     if(check==false){
//         alert("Please Select Checkbox");
//         document.getElementById("rem").value="";
//         document.getElementById("rem").focus();
//         return false;
//     }

    
    
   
// }