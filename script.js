$(document).ready(function () {
    readGameList();

    $("#deleteNo").on("click", function (e) {
        deleteHide();
    })

    $("#search").on("keyup", function (e) {
        suggestGame(e.target.value);
    });

    $("#searchButton").on("click", function (e) {
        searchGame($("#search").val());
    });

});

function readGameList() {
    http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
            document.getElementById("nav-home").innerHTML = http.responseText;
        }
    };
    http.open("GET", `readProcess.php`, true);
    http.send();
}

function deleteGameList(name) {
    http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
            document.getElementById("txtPrompt").innerHTML = http.responseText;
            readGameList();
            deleteHide();
        }
    };
    http.open("GET", `deleteProcess.php?name=${name}`, true);
    http.send();
}

function toDelete(name) {
    if (name == `Select ID`) {
        $("#validateModal").slideDown(500);
        $("#validateYes").on("click", function (e) {
            $("#validateModal").slideUp(500);
        })
    } else {
        $("#deleteModalMessage").html(`Are you sure to delete ${name}?`);
        deleteModalShow(name);
    }

}

function showInvalid() {
    $("#invalidModal").slideDown(500);
        $("#invalidYes").on("click", function (e) {
            $("#invalidModal").slideUp(500);
        });
}

function deleteModalShow(name) {
    $("#deleteModal").slideDown(500);

    $("#deleteYes").on("click", function (e) {
        deleteGameList(name);
        console.log("1");
    });
}

function deleteHide() {
    $("#deleteModal").slideUp(500);
}

function searchGame(toSearch) {
    const mySuggestion = document.getElementById("suggestion");
    if (toSearch.length == 0) {
        document.getElementById("suggestion").innerHTML = "";
    } else {
        $("#suggestion").slideUp(500);
        http = new XMLHttpRequest();
        http.onreadystatechange = function () {
            if (http.readyState == 4 && http.status == 200) {
                document.getElementById("suggestion").innerHTML = "";
                document.getElementById("nav-home").innerHTML =
                    http.responseText;
            }
        };
        http.open("GET", `searchProcess.php?d=${toSearch}`, true);
        http.send();
    }
}

function suggestGame(toSearch) {
    if (toSearch.length == 0) {
        $("#suggestion").slideUp(300);
        document.getElementById("suggestion").innerHTML = "";
        readGameList();
    } else {
        http = new XMLHttpRequest();
        http.onreadystatechange = function () {
            if (http.readyState == 4 && http.status == 200) {
                document.getElementById("suggestion").innerHTML = http.responseText;
                $("#suggestion").slideDown(300);
            }
        };
        http.open("GET", "getNames.php?q=" + toSearch, true);
        http.send();
    }
}

function btnDisable() {
    document.getElementById("save").disabled = true;
}