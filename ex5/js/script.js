
function showData(data){

    for (const key in data.categories) {
        const li = document.createElement('li');

        const sHtml = `<a class="dropdown-item" href="./books_list.php?category=${data.categories[key].name}">${data.categories[key].name}</a>`;
        
        li.innerHTML = sHtml;

        document.getElementById("categories").appendChild(li);
    }

}

fetch("data/books.json")
    .then(response => response.json())
    .then(data => showData(data));