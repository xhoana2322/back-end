const urlAPI = "http://localhost/Progetto-settimana-2_back-end/wordpress/wp-json/wp/v2/posts";

fetch(urlAPI)
    .then(resp => resp.json())
    .then(json => console.log(json))
