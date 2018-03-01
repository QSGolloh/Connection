//Javascript validation for cv generator

//form validation for header 
function validateHeader() {
    var first = document.forms["myForm"]["fname"].value;
    var postal = document.forms["myForm"]["address"].value;
    var number = document.forms["myForm"]["number"].value;

	var email = document.forms["myForm"]["email"].value;
	at = email.indexOf("@");
    dot = email.lastIndexOf(".");
         
	var nationality = document.forms["myForm"]["nationality"].value;
	var url = document.forms["myForm"]["url"].value;


    if (first == "") {
        alert("Full name is required");
        return false;
    }
 
    if (postal== "") {
        alert("Postal address must be filled out");
        return false;
    }
    if (number== "") {
        alert("Phone number must be filled out");
        return false;
    }

    if (email=="" || at < 1 || ( dot - at < 2 )) 
         {
         alert("Please provide a valid email address")
         document.myForm.email.focus() ;
         return false;
    }
    
    if (nationality== "") {
        alert("Nationality must be filled out");
        return false;
    }
    if (url== "") {
        alert("LinkedIn URL must be filled out");
        return false;
    }



}