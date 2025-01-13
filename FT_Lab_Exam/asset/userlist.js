
function searchAuthors() {
    var searchQuery = document.getElementById('search').value;

    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../controller/search.php?search=' + encodeURIComponent(searchQuery), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('authorTable').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}
