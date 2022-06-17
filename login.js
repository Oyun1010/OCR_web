const mysql = require('mysql');
const express = require('express');
const session = require('express-session');
const path = require('path');
var input = document.getElementById('toggleswitch');
var login = document.getElementById('nevbtn');
input.addEventListener('change', function(){
    if(this.checked) {
        outputtext.innerHTML = "Ажилтан"
        var x= document.createElement('INPUT');
        document.getElementById('phone').placeholder = "Ажилтаны нэр";
        document.getElementById('pass').placeholder = "Ажилтаны код";
        x.placeholder = "Нууц үг"
        document.getElementById("inform").appendChild(x);
        console.log(outputtext);
    }
    else{
        document.getElementById('phone').placeholder = "Утасны дугаар";
        document.getElementById('pass').placeholder = "Нууц үг";
        document.getElementById('inform')[2].remove();
        outputtext.innerHTML = "Хувь хүн"
        console.log(outputtext);
    }
        
});
function loginclick() {
    //alert("Амжилтай нэвтэрлээ");
    location.href="userhome1.php";
    console.log("ji");
};