
function checkSearchTerm(){
    var choice = document.getElementsByName('searchTerm');
    //looping through all the radio buttons to see which one is checked
    for (var i = 0; i < choice.length; i++){
        if(choice[i].checked == true){
            if (choice[i].value == "major"){
                //call major ajax
                findUserByMajor();
            } else if (choice[i].value == "year"){
                //call year ajax
                findUserByYear(); // is it right yh ok let me continue then over sure over
            } else if (choice[i].value == "name"){
                //call name ajax
                findUserByName();
            }
        } else {
            //continue.... ive forgotten how to tell it what to say if nothing has been checked.. over
            //let us test what you have done first over ok over
        }
    }
}

// function to find user by major
function findUserByMajor() {
    var para = document.getElementById('searchResults');
    var major = document.getElementById('search').value; //getting the value from the search box
    if (major != ''){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
             var jsonResponse = JSON.parse(this.responseText);
           //looping through results.
           var objects = Object.keys(jsonResponse).length; // checks for object keys in json response
           if (objects > 0){
            //if there are results
            var names = '';
            for (var i = 0; i < objects; i++){
                names += jsonResponse[i].firstname + " " + jsonResponse[i].lastname + ", ";
            }
            para.innerHTML = names;    

        } else {
            // if there are no results from the search, append to paragraph
            para.innerHTML = "No one matched your search term";
        }

    }
};
xhttp.open("GET", '../controller/ajaxcontroller.php?major='+major+'&msg=0', true); 
xhttp.send();
} 
}

    //function to find user by year
    function findUserByYear(){
        var para = document.getElementById('searchResults'); //same paragraph cool?yhp
    var yeargroup = document.getElementById('search').value; //because wea re using the same search box cool?yhp
    if (yeargroup != ''){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
             var jsonResponse = JSON.parse(this.responseText);
           //looping through results.
           var objects = Object.keys(jsonResponse).length; //checks for object keys in json response
           if (objects > 0){
            //if there are results
            var names = '';
            for (var i = 0; i < objects; i++){
                names += jsonResponse[i].firstname + " " + jsonResponse[i].lastname + ", "; 
            }
            para.innerHTML = names;    

        } else {
            // if there are no results from the search, append to paragraph
            para.innerHTML = "No one matched your search term";
        }

    }
};
xhttp.open("GET", '../controller/ajaxcontroller.php?year='+yeargroup+'&msg=1', true); 
xhttp.send();
} 
}

      //function to find user by name
      function findUserByName(){
        var para = document.getElementById('searchResults');
    var name = document.getElementById('search').value; //getting the value from the search box
    if (name != ''){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
             var jsonResponse = JSON.parse(this.responseText);
           //looping through results.
           var objects = Object.keys(jsonResponse).length; //checks for object keys in json response
           if (objects > 0){
            //if there are results
            var names = '';
            for (var i = 0; i < objects; i++){
                names += jsonResponse[i].firstname + " " + jsonResponse[i].lastname + ", ";
            }
            para.innerHTML = names;    

        } else {
            // if there are no results from the search, append to paragraph
            para.innerHTML = "No one matched your search term";
        }

    }
};
xhttp.open("GET", '../controller/ajaxcontroller.php?name='+name+'&msg=2', true); 
xhttp.send();
} 
}
