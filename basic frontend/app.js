let response = await fetch('http://localhost/simple%20application/backend/server.php');

if(response.ok){
    let json = await response.json();
    let table = document.createElement('table');

    console.log(json);
    document.body.prepend(table);

    for(let i = 0; i < json.length; i++){
        let tr = document.createElement('tr');

        table.appendChild(tr);

        for(let j = 0; j < json[i].length; j++){
            let td = document.createElement('td');
            td.textContent = json[i][j];
            tr.appendChild(td);
        }

    }
}

else{
    throw new Error('connection failed');
}