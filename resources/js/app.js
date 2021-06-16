require('./bootstrap');

function displayQueryCard(display) {
    document.getElementById('search-results').style.display = display ? "flex" : "none"
}

function clearDisplayQueryCard() {
    const searchResultsBody = document.getElementById('search-results');
    while (searchResultsBody.lastElementChild) {
        searchResultsBody.removeChild(searchResultsBody.lastElementChild);
    }
}

const buttons = document.getElementsByClassName('api-query')
const searchResultBody = $('#search-results-body')

for(const button of buttons) {
    button.addEventListener('click', event => {
        console.log('query:', event.target.dataset.searchQuery)

        window.axios.get(`http://www.omdbapi.com/?s=${event.target.dataset.searchQuery}&apikey=720c3666`)
            .then(response => response.data)
            .then(data => {
                displayQueryCard(true)

                searchResultBody.empty();
                data['Search'].forEach(movie => {
                    const image = movie['Poster'] !== "N/A" ? `<img class="card-img-top" src="${movie['Poster']}" alt="Post image">` : ''
                    searchResultBody.append(`
                        <div class="card m-2" style="width: 18rem;">
                        ${image}
                        <div class="card-body">
                            <h5 class="card-title">${movie['Title']}</h5>
                            <p class="card-text">${movie['Year']}</p>
                            <p class="card-text">${movie['Type']}</p>
                            <a href="https://imdb.com/title/${movie['imdbID']}" class="btn btn-primary" target="_blank">IMDB</a>
                        </div>
                        </div>
                    `)
                })
            })
    })
}

displayQueryCard(false);






