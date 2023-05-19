<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <script src="bootstrap.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="BSIT3EG2G1.css" type="text/css">
   <script src="script.js"></script> 
    <!--<script src="test.js"></script>-->
    <title>Main Page</title>


    <script>
        function showHint(gname) {
            if (gname.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
            }
            else {
                http = new XMLHttpRequest();
                http.onreadystatechange = function () {
                    if (http.readyState == 4 && http.status == 200) {
                        document.getElementById("txtHint").innerHTML = http.responseText;
                    }
                    else {
                        document.getElementById("txtHint").innerHTML = "Loading...";
                    }
                };
                http.open("GET", "getNames.php?q=" + gname, true);
                http.send();
            }
        }


    </script>

</head>

<div class="header">
    <div class="logo">
        <img src="a4tech.png" alt="Example image" width="750" height="220">
    </div>

    <div class="topictitle">
        <img src="topictitle.png" alt="Example image" width="750" height="50">
    </div>

</div>

<div class="container mt-1 mb-5">
    <div id="gallery" class="carousel slide" data-bs-ride="carousel">

        <!-- These are the indicators for selecting slides. -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="10" aria-label="Slide 11"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="11" aria-label="Slide 12"></button>
        </div>

        <!-- These are the images and captions for each slides. -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="gamecovers/2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/9.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/12.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/1.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/8.jpeg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/7.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/5.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/6.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/10.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="gamecovers/11.png" class="d-block w-100">
            </div>
        </div>

        <!-- These are the navigation buttons previous and next. -->
        <button class="carousel-control-prev" type="button" data-bs-target="#gallery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#gallery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<body class="body1">

    <!--<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a> -->

    <div class="container my-1 bg-custom">
        <nav>
            <div class="nav nav-tabs border-1" id="nav-tab" role="tablist">
                <button class="nav-link active px-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                <button class="nav-link px-3" id="nav-add-tab" data-bs-toggle="tab" data-bs-target="#nav-add"
                    type="button" role="tab" aria-controls="nav-add" aria-selected="false">Add</button>
                <button class="nav-link px-3" id="nav-edit-tab" data-bs-toggle="tab" data-bs-target="#nav-edit"
                    type="button" role="tab" aria-controls="nav-edit" aria-selected="false">Edit</button>
                <button class="nav-link px-3" id="nav-delete-tab" data-bs-toggle="tab" data-bs-target="#nav-delete"
                    type="button" role="tab" aria-controls="nav-delete" aria-selected="false">Delete</button>
                <div class="ms-auto">
                   <!-- <form method="post" action="searchProcess.php" class="d-flex m-1">
                        <div class="input-group">
                            <input class="form-control bg-custom border-0" type="text" name="search"
                                placeholder="Search Games" onkeyup="showHint(this.value)">
                            <button type="submit" class="btn btn-primary rounded-0">Search</button>

                            <label id="txtHint" style="margin-top: 10px;"></label>

                        </div>
                    </form> -->

                    <div class="container search-box d-flex m-1">
                        <div class="search-container input-group">
                            <input type="text" name="search" class="form-control bg-custom border-0" id="search" placeholder="Search" autocomplete="off" required />
			                <button class="searchBtn btn btn-primary rounded-0" id="searchButton">Search</button>
                        </div>
                        <div id="suggestion"></div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            
        </div>

        <div class="tab-pane fade p-3" id="nav-add" role="tabpanel" aria-labelledby="nav-add-tab">
            <script>
                function check() {
                    var steamId = document.getElementById("steamId").value;
                    var gameTitle = document.getElementById("gameTitle").value;
                    var genre = document.getElementById("genre").value;
                    var company = document.getElementById("company").value;
                    var date = document.getElementById("date").value;
                    var revenue = document.getElementById("revenue").value;
                    var gamePic = document.getElementById("gamePic").value;
                    if (steamId.length == 0 || gameTitle.length == 0 || genre.length == 0 || company.length == 0 || date.length == 0 || revenue.length == 0) {
                        document.getElementById("txtPrompt").innerHTML = "<span style='color: white; margin-top: 10px;'>Please provide all the details!</span>";

                    }
                    else {
                        http = new XMLHttpRequest();
                        http.onreadystatechange = function () {
                            if (http.readyState == 4 && http.status == 200) {
                                document.getElementById("txtPrompt").innerHTML = http.responseText;
                                document.getElementById("steamId").value = "";
                                document.getElementById("gameTitle").value = "";
                                document.getElementById("genre").value = "";
                                document.getElementById("company").value = "";
                                document.getElementById("date").value = "";
                                document.getElementById("revenue").value = "";
                                document.getElementById("gamePic").value = "";
                            }
                            else {
                                document.getElementById("txtPrompt").innerHTML = "Loading...";
                            }
                        };
                        http.open("POST", "addProcess.php?steamId=" + steamId + "&gameTitle=" + gameTitle +
                            "&genre=" + genre + "&company=" + company + "&date=" + date + "&revenue=" + revenue + "&gamePic=" + gamePic, true);
                        http.send();
                    }
                }

                function createData() {
                    
                    var formData = new FormData(document.getElementById("modalForm"));
                    var steamId = document.getElementById("steamId").value;
                    var gameTitle = document.getElementById("gameTitle").value;
                    var genre = document.getElementById("genre").value;
                    var company = document.getElementById("company").value;
                    var date = document.getElementById("date").value;
                    var revenue = document.getElementById("revenue").value;
                    var gamePic = document.getElementById("gamePic").value;
                    if (steamId.length == 0 || gameTitle.length == 0 || genre.length == 0 || company.length == 0 || date.length == 0 || revenue.length == 0 || gamePic.length==0) {
                        event.preventDefault();
                        document.getElementById("txtPrompt").innerHTML = "<span style='color: white; margin-top: 10px;'>Please provide all the details!</span>";

                    }else {
                        http = new XMLHttpRequest();
                        http.onreadystatechange = function () {
                        if (http.readyState == 4 & http.status == 200) {
                            document.getElementById("txtPrompt").innerHTML = http.responseText;
                            //readGameList();
                            if (document.getElementById("txtPrompt").innerHTML == "Steam App ID already exist!") {     
                                showInvalid();
                            } else {
                                readGameList();
                            }
                        }
                        else {
                            document.getElementById("txtPrompt").innerHTML = "Loading...";
                        }
                    };
                    http.open("POST", "addProcess.php", true);
                    http.send(formData);
                    }
                    
                }

                function updateData() {    
                    var formData = new FormData(document.getElementById("modalForm2"));
                    http = new XMLHttpRequest();
                    http.onreadystatechange = function () {
                        if (http.readyState == 4 & http.status == 200) {
                            document.getElementById("txtPrompt").innerHTML = http.responseText;
                            readGamelist();
                        }
                        else {
                            document.getElementById("txtPrompt").innerHTML = "Loading...";
                        }
                    };
                    http.open("POST", "updateProcess.php", true);
                    http.send(formData);
                }

                function showAvail(steamId) {
                    if (steamId.length == 0) {
                        document.getElementById("avail").innerHTML = "";
                    }
                    else {
                        http = new XMLHttpRequest(); //#2
                        http.onreadystatechange = function () {
                            if (http.readyState == 4 && http.status == 200) {
                                document.getElementById("avail").innerHTML = http.responseText;
                            }
                            else {
                                document.getElementById("avail").innerHTML = "Loading...";
                            }
                        };
                        http.open("GET", "checkAvail.php?steamId=" + steamId, true);
                        http.send();
                    }
                }
            </script>

            <body class="bodyAdd">
                <link rel="stylesheet" href="css/add.css" type="text/css">

                <div class="container d-flex justify-content-center align-items-center" id="tabs">
                    <div class="container d-flex justify-content-center align-items-center" style=" margin-right: 16%;">
                        <form id="modalForm" method="post" enctype="multipart/form-data">
                            <div class="container" style=" margin-left: -25px;">

                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        
                                        <input type="text" class="form-control" placeholder="Steam ID"
                                            id="steamId" name="steamId" onkeyup="showAvail(this.value)"
                                            oninput="checkInput(event)" required />
                                        <label for="steamId" class="form-label fw-bold">Steam App ID:</label>
                                    </div>
                                    <div>
                                        <span><i></i><label id="avail"></label></span>
                                    </div>

                                    <script>
                                        function checkInput(event) {
                                         const input = event.target.value;
                                         const regex = /^[0-9]*$/; // para letters lang
                                        if (!regex.test(input)) {
                                         event.target.value = input.replace(/[^0-9]/g, ''); // para di tumanggap ng hindi numbers
                                         alert('INVALID INPUT!\nNumbers Only!'); //error message pag naginput ng di number
                                         }
                                        }
                                        </script>

                                </div>


                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control " placeholder="Game Title" id="gameTitle"
                                        name="gameTitle" required></input>
                                    <label for="gameTitle" class="form-label fw-bold">Game Title:</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Genre" id="genre" oninput="checkGenreInput(event)" name="genre"
                                        required />
                                    <label for="genre" class="form-label fw-bold">Genre:</label>
                                </div>
                                <script>
                                        function checkGenreInput(event) {
                                            const input = event.target.value;
                                            const regex = /^[a-zA-Z]*$/; // para letters lng
                                            if (!regex.test(input)) {
                                            event.target.value = input.replace(/[^a-zA-Z]/g, ''); // para di tumanggap ng hindi letters
                                            alert("INVALID INPUT!\nLetters Only!"); // error message pag nagtry ibang characters
                                            }
                                            if (input.length > 20) {
                                            event.target.value = input.slice(0, 40); // para 40 lang max input
                                            alert("Input too long!\nPlease limit to 40 characters."); // error message pag sumobra sa 40
                                            }
                                            }
                                    </script>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Company" id="company"
                                        name="company" required />
                                    <label for="company" class="form-label fw-bold">Company:</label>
                                </div>

                                <div class="form-floating mb-3">
                                </div>
                                <div class="form-floating mb-3" style="width:200%;">
                                    <label for="date" class="form-label fw-bold">Date:</label>
                                    <input type="date" class="form-control text-center" id="date" name="date"
                                        required />
                                </div>

                                <div class="input-group mb-3" style="width:200%;">
                                    <span class=" input-group-text">$</span>
                                    <input type="text" class="form-control"  placeholder="Revenue" id="revenue"
                                        oninput="checkRevenueInput(event)"  name="revenue" required />
                                    <span class="input-group-text">.00</span>
                                </div>
                                <script>
                                    function checkRevenueInput(event) {
                                            const input = event.target.value;
                                            const regex = /^[0-9,]*$/; // para letters lang
                                            if (!regex.test(input)) {
                                             event.target.value = input.replace(/[^0-9,]/g, ''); // para di tumanggap ng hindi numbers
                                             alert('INVALID INPUT!\nNumbers and Commas Only!'); //error message pag naginput ng di number
                                             }
                                         } 
                                </script>

                                <div class="form-floating mb-3" style="width:200%;">
                                        
					                    <input type="file" id="gamePic" accept="image/*" class="form-control" name="gamePic" required></input><br/>
                                </div>

                             
                                <div
                                    class="position-absolute top-70 start-50 translate-middle-x d-flex justify-content-center gap-2">
                                    <input type="submit" id="save" value="Save" onclick="createData();" class="btn btn-primary"
                                        style="width: 100px; height: 50px;" />
                                    <label id="txtPrompt" style="margin-top: 25px"></label>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </body>
        </div>

        <div class="tab-pane fade p-3" id="nav-edit" role="tabpanel" aria-labelledby="nav-edit-tab">

            <body class="bodyUpdate">
                <link rel="stylesheet" href="css/1update.css" type="text/css">
                <div class="container">
                    <form method="post" id="modalForm2" enctype="multipart/form-data">
                        <div class="container">
                            <label for="name" class="form-label fw-bold mb-1 text-light">Select Game:</label>
                            <select name="name" id="name" class="form-select form-select-md"
                                aria-label=".form-select-md example">
                                <option selected disabled>Game</option>
                                <?php
                                $xml = simplexml_load_file("BSIT3EG2G1.xml");
                                foreach ($xml->game as $game) {
                                    $name = $game->name;
                                    echo "<option>" . $name . "</option>";
                                }
                                ?>
                            </select>

                            <div class="input-group mb-3">
                                <span class=" input-group-text">$</span>
                                <input type="text" class="form-control" placeholder="New Revenue" id="newRevenue"
                                  oninput="checkNewRevenueInput(event)"  name="newRevenue" required />
                                <span class="input-group-text">.00</span>
                            </div>
                            <script>
                            function checkNewRevenueInput(event) {
                                const input = event.target.value;
                                            const regex = /^[0-9,]*$/; // para letters lang
                                            if (!regex.test(input)) {
                                             event.target.value = input.replace(/[^0-9,]/g, ''); // para di tumanggap ng hindi numbers
                                             alert('INVALID INPUT!\nNumbers and Commas Only!'); //error message pag naginput ng di number
                                             }
                                         } 
                            </script>

                            <div class="form-floating mb-3">
                                <input type="text" name="newCompany" id="newCompany" class="form-control"
                                    style="width: 477px" placeholder="Enter Username" required></input>
                                <label for="newCompany" class="form-label fw-bold">New Company:</label>
                            </div>

                            <div class="form-floating mb-3" >
                                        
					                    <input type="file" id="gamePic" accept="image/*" class="form-control" name="gamePic" required></input><br/>
                                </div>

                            <input type="submit" value="Update" onclick="updateData()" class="btn btn-primary"
                                style="width: 100px; height: 50px;" />
                        </div>
                    </form>
                </div>
            </body>
        </div>

        
        <div class='tab-pane fade p-3' id='nav-delete' role='tabpanel' aria-labelledby='nav-delete-tab'>
  <body class='bodyDelete'>
    <form onsubmit="event.preventDefault(); toDelete(this.name.value)">
      <label for='name' class='form-label fw-bold' style='color: white;'>Game Title:</label>
      <div class='container d-flex justify-content-center align-items-center'>
        <select id='name' class='form-select form-select-md' aria-label='.form-select-md example' name='name'>
          <option selected disabled>Select ID</option>
          <?php
          $xml = new domdocument('1.0');
          $xml->load('BSIT3EG2G1.xml');
          $games = $xml->getElementsByTagName('game');
          foreach ($games as $game) {
            $gameName = $game->getElementsByTagName('name')->item(0)->nodeValue;
            echo '<option value="' . $gameName . '">' . $gameName . '</option>';
          }
          ?>
        </select>
      </div>
      <div class='container'>
        <button type='submit' value='Delete' id='deleteRecord' class='btn btn-primary'
          style='width: 100px; height: 50px;'>Delete</button>
      </div>
    </form>
  </body>
</div>


    </div>
    </div>

    <!--- Delete Modal -->
    <div class="modal" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Proceed to Delete?</h5>
                </div>
                <div class="modal-body">
                    <div id="deleteModalMessage" class="p-4"> Are you sure you want to delete the selected game?</div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="deleteNo" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary" id="deleteYes">Yes</button>
                </div>
            </div>
        </div>                    
    </div>

    <!--- Validate Modal -->
    <div class="modal" id="validateModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Invalid</h5>
                </div>
                <div class="modal-body">
                    <div id="deleteModalMessage" class="p-4">Please select a game you want to delete!</div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"  id="validateYes">Okay</button>
                </div>
            </div>
        </div>                    
    </div>

    <div class="modal" id="invalidModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Invalid</h5>
                </div>
                <div class="modal-body">
                    <div id="deleteModalMessage" class="p-4">Steam App ID already exist!</div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"  id="invalidYes">Okay</button>
                </div>
            </div>
        </div>                    
    </div>

   

</body>

</html>

<style>
    /* Header Styles */
    .header {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px;
    }

    .logo {
        margin-bottom: 20px;
    }

    /* Responsive styles */
    @media (max-width: 767px) {
        .header {
            padding: 20px;
        }

        .logo img {
            width: 100%;
            height: auto;
        }

    }

    .nav-link {
        color: #ffffff;
    }

    .nav-link:hover {
        color: white;
    }

    html {
        scroll-behavior: smooth;
    }

    body {

        margin: 0;
        padding: 0;
    }

    section {
        width: 100%;
        height: 300vh;
        background: url(bg.jpg) no-repeat;
        background-size: cover;
    }

    .gotopbtn {
        position: fixed;
        width: 50px;
        height: 50px;
        background: #0d6efd;
        bottom: 40px;
        right: 50px;

        text-decoration: none;
        text-align: center;
        line-height: 50px;
        color: white;
        font-size: 22px;
        border-radius: 5px;
    }

    .carousel-item img {
        height: 550px;
        border-radius: 10px;
    }

    #gallery {
        border: 3px solid #ccc;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background: linear-gradient(to bottom, #f5f5f5, #e8e8e8);
        border-radius: 10px;
    }

    .topic {
        margin-top: 10px;

    }

    .body1 {
        background-image: linear-gradient(to bottom right, #23262E, #29312E);
        font-family: 'Rubik', sans-serif;
    }
</style>