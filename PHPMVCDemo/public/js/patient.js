function addPatient(){
    var name = document.getElementById('name').value;
    var date = document.getElementById('date').value; 
    data = {
        controller: "addPatients",
        name: name,
        date: date,
    }
    _apiGet("../../../public/index.php", data);
}

function updatePatient(){
    var id = document.getElementById('id').value;
    var name = document.getElementById('name').value;
    var date = document.getElementById('date').value; 
    alert(id + " " + name + " " + date);
    data = {
        controller: "updatePatients",
        id: id,
        name: name,
        date: date, 
    }
    _apiGet("../../../public/index.php", data);
}
