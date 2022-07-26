var ajax = new XMLHttpRequest();

function getText() {
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                console.dir(ajax.responseText);
                document.getElementById("res").innerHTML = ajax.response;
            }
        }
    }
    var league = document.getElementById("league").value;
    ajax.open("get", "table.php?league=" + league);
    ajax.send();
}

function getXML() {
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {

                console.dir(ajax);
                let rows = ajax.responseXML.firstChild.children;
                let result = "<table border ='1'>";
                result = result + "<tr><th>Date</th><th>Place</th><th>Score</th><th>Team1</th><th>Team2</th></tr>";
                for (var i = 0; i < rows.length; i++) {
                    result += "<tr>";
                    result += "<td>" + rows[i].children[0].firstChild.nodeValue + "</td>";
                    result += "<td>" + rows[i].children[1].firstChild.nodeValue + "</td>";
                    result += "<td>" + rows[i].children[2].firstChild.nodeValue + "</td>";
                    result += "<td>" + rows[i].children[3].firstChild.nodeValue + "</td>";
                    result += "<td>" + rows[i].children[4].firstChild.nodeValue + "</td>";
                    result += "</tr>";
                }
                document.getElementById("res").innerHTML = result;
            }
        }
    }
    var date = document.getElementById("date").value;
    ajax.open("get", "list_of_game_by_date.php?date=" + date);
    ajax.send();
}

function getJSON() {
    ajax.onreadystatechange = function(){
        let rows = JSON.parse(ajax.responseText);
    console.dir(rows);
    if (ajax.readyState === 4) {
        if (ajax.status === 200) {
            console.dir(ajax);
            let result = "<table border ='1'>";
            result = result + "<tr><th>Player</th><th>Date</th><th>Place</th><th>Score</th><th>Team1</th><th>Team2</th></tr>";
            for (var i = 0; i < rows.length; i++) {
                result += "<tr>";
                result += "<td>" + rows[i].player+ "</td>";
                result += "<td>" + rows[i].date + "</td>";
                result += "<td>" + rows[i].place + "</td>";
                result += "<td>" + rows[i].score + "</td>";
                result += "<td>" + rows[i].team1 + "</td>";
                result += "<td>" + rows[i].team2 + "</td>";
                result += "</tr>";
            }
            document.getElementById("res").innerHTML = result;
        }
    }
    };
    var player = document.getElementById("player").value;
    ajax.open("get", "list_of_game_by_player.php?player=" + player);
    ajax.send();
}