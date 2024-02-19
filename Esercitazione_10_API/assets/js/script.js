const urlAPI = "http://localhost/Progetto-settimana-2_back-end/wordpress/wp-json/wp/v2/";


document.addEventListener('DOMContentLoaded', () => {
    // if (document.location.pathname === "/index.html") {
    //     getPost();
    // } else if(document.location.pathname === "/users.html") {
    //     getUsers();
    // }
    getPost();

    getUsers();
})

function getPost() {
    // if(window.location)
   fetch(urlAPI + 'posts')
    .then(resp => resp.json())
    .then(json => {
        console.log(json)
        json.forEach(post => {
            let card = document.querySelector(".card");
            card.innerHTML += `
            <img src="${post._embedded}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">${post.title.rendered}</h5>
                <p class="card-text">${post.excerpt.rendered}</p>
                <a href="#" class="btn btn-primary">Modifica</a>
                <a href="#" class="btn btn-delete btn-danger">Elimina</a>
            </div>
            `
        // let  elimina = document.querySelectorAll(".btn-delete");
        //     elimina.addEventListener("click", (event) => {
        //         event.preventDefault();
        //         console.log(event.target)
        //         fetch(urlAPI + 'posts/' + post.id, {
        //             method: "DELETE"
        //         }).then(resp => resp.json())
        //         .then(data => console.log(data))
        // })

        })
    })
    .catch(err => console.log(err)); 
}

function getUsers() {
    fetch(urlAPI + 'users')
    .then(resp => resp.json())
    .then(json => {
        console.log(json);
        let users = document.querySelector(".users");
        json.forEach(user => {
            users.innerHTML += `
            <tbody>
                <tr>
                    <th scope="row">${user.id}</th>
                    <td>${user.name}</td>
                    <td><button class="btn btn-primary">Scopri di più</button></td>
                </tr>
            </tbody>
            `
        })
    })
    .catch(err => console.log(err));
}



