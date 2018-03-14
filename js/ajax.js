function checkSearchTerm() {
    var name = document.getElementById('name').value;
    var major = document.getElementById('major');
    var majorChoice = major.options[major.selectedIndex].value;
    var year = document.getElementById('year');
    var yearChoice = year.options[year.selectedIndex].value;
    if (name != ''){
        findUserByName(name);
    } else if (majorChoice != "0"){
        findUserByMajor(majorChoice);
    }else if (yearChoice != "0"){
        findUserByYear(yearChoice);
    }
    
}

function findUserByMajor(major) {   
    $('.matches').empty();
    var divElements = "";
   
    if (major != '') {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var jsonResponse = JSON.parse(this.responseText);
                //looping through results.
                var objects = Object.keys(jsonResponse).length; // checks for object keys in json response
                if (objects > 0) {
                    //if there are results
                    for (var i = 0; i < objects; i++) {
                        divElements += '<div class="card text-center col-lg-3" style="margin-right:10px;">\n' +
                            '    <div class="col-xs-3">\n' +
                            '      <div class="avatar">\n' +
                            '        <img src="../img/Friends/woman-1.jpg" alt="Circle Image" class="img-circle img-no-padding                                                  img-responsive">\n' +
                            '      </div>\n' +
                            '    </div>\n' +
                            '    <div class="card-body">\n' +
                            '      <a class="card-title" href="profile.php?id='+ jsonResponse[i].user_id +'">'+ jsonResponse[i].firstname +' '+ jsonResponse[i].lastname +'</a>\n' +
                            '      <p class="card-text">' + jsonResponse[i].status +' </p>\n' +
                            '      <a href="../controller/connectcontroller.php?rid='+jsonResponse[i].user_id+'&msg=1" class="btn btn-primary">Connect</a>\n' +
                            '    </div>\n' +
                            '  </div>';
                    }
                    $('.matches').append(divElements);
                        //herh lol
                } else {

                }

            }
        };
        xhttp.open("GET", '../controller/ajaxcontroller.php?major=' + major + '&msg=0', true);
        xhttp.send();
    }
}

//function to find user by year
function findUserByYear(yeargroup) {
    $('.matches').empty();
    var divElements = "";
   
    if (yeargroup != '') {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var jsonResponse = JSON.parse(this.responseText);
                //looping through results.
                var objects = Object.keys(jsonResponse).length; // checks for object keys in json response
                if (objects > 0) {
                    //if there are results
                    for (var i = 0; i < objects; i++) {
                        divElements += '<div class="card text-center col-lg-3" style="margin-right:10px;">\n' +
                            '    <div class="col-xs-3">\n' +
                            '      <div class="avatar">\n' +
                            '        <img src="../img/Friends/woman-1.jpg" alt="Circle Image" class="img-circle img-no-padding                                                  img-responsive">\n' +
                            '      </div>\n' +
                            '    </div>\n' +
                            '    <div class="card-body">\n' +
                            '      <a class="card-title" href="profile.php?id='+ jsonResponse[i].user_id +'">'+ jsonResponse[i].firstname +' '+ jsonResponse[i].lastname +'</a>\n' +
                            '      <p class="card-text">' + jsonResponse[i].status +' </p>\n' +
                            '      <a href="../controller/connectcontroller.php?rid='+jsonResponse[i].user_id+'&msg=1" class="btn btn-primary">Connect</a>\n' +
                            '    </div>\n' +
                            '  </div>';
                    }
                    $('.matches').append(divElements);

                } else {
                    
                }
            }
        };
        xhttp.open("GET", '../controller/ajaxcontroller.php?year=' + yeargroup + '&msg=1', true);
        xhttp.send();
    }
}

//function to find user by name
function findUserByName(name) {
    $('.matches').empty();
    var divElements = "";
   // var name = document.getElementById('search').value; //getting the value from the search box
    if (name != '') {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var jsonResponse = JSON.parse(this.responseText);
                //looping through results.
                var objects = Object.keys(jsonResponse).length; // checks for object keys in json response
                if (objects > 0) {
                    //if there are results
                    for (var i = 0; i < objects; i++) {
                        divElements += '<div class="card text-center col-lg-3" style="margin-right:10px;">\n' +
                            '    <div class="col-xs-3">\n' +
                            '      <div class="avatar">\n' +
                            '        <img src="../img/Friends/woman-1.jpg" alt="Circle Image" class="img-circle img-no-padding                                                  img-responsive">\n' +
                            '      </div>\n' +
                            '    </div>\n' +
                            '    <div class="card-body">\n' +
                           '      <a class="card-title"href="profile.php?id='+ jsonResponse[i].user_id +'" >'+ jsonResponse[i].firstname +' '+ jsonResponse[i].lastname +'</a>\n' +
                            '      <p class="card-text">' + jsonResponse[i].status +' </p>\n' +
                            '      <a href="../controller/connectcontroller.php?rid='+jsonResponse[i].user_id+'&msg=1" class="btn btn-primary">Connect</a>\n' +
                            '    </div>\n' +
                            '  </div>';
                    }
                    $('.matches').append(divElements);

                } else {
                 
                }

            }
        };
        xhttp.open("GET", '../controller/ajaxcontroller.php?name=' + name + '&msg=2', true);
        xhttp.send();
    }
}

function displayClickedUser(name){
    alert(name);
    /*
    newDivElement = '        <div>\n' +
        '            <a href="#">\n' +
        '                <img src="../img/Friends/woman-1.jpg">\n' +
        '            </a>\n' +
        '            <h1 class="profile-name">'+ firstname +' '+lastname + '</h1>\n' +
        '            <p class="user-text">sharing awesome ideas with your friends, you can grow, grow fast</p>\n' +
        '        </div>';
    $('.cover-container').append(newDivElement); */
}
