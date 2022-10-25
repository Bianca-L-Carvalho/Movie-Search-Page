let pesquisaFilmes = document.querySelector("#query");
pesquisaFilmes.addEventListener("change", function () {

    fetch("ajax.php?pesquisa=" + pesquisaFilmes.value)
        .then(function (resposta) {
            return resposta.json()
        })

        .then(function (db_filmes) {

            //console.log(filmes[0]["image"]);
            const main = document.querySelector("main");
            main.innerHTML = "";
            console.log(db_filmes);

            for (let i = 0; i < db_filmes.length; i++) {
                const div = document.createElement("div");
                div.classList.add("movie");
                main.appendChild(div);

                const img = document.createElement("img");
                img.src = db_filmes[i].image;
                div.appendChild(img);

                const h5 = document.createElement("h5");
                h5.classList.add("text-center");
                h5.textContent = db_filmes[i].name;
                div.appendChild(h5);


            }
        })
})




