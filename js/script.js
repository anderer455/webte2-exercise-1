function fetchTable (formData) {
    let url = '/files_upload/searchDirectory.php';
    const fileList = document.querySelector('#fileList');
    fetch(url, { method: 'POST', body: formData })
        .then((response) => {
            return response.text();
        })
        .then((body)  => {
            fileList.innerHTML = '';
            fileList.innerHTML = body;
        });
}

function printTable () {
    let formData = new FormData();
        let currentPath = '/home/xurbaneka1/public_html/files_upload/';
    formData.append('path', currentPath);
    fetchTable(formData);
}

printTable();

const button = document.querySelector('#submit');

button.addEventListener('click', () => {
    const form = new FormData(document.querySelector('#uploadForm'));
    const url = '/files_upload/upload.php'
    const request = new Request(url, {
        method: 'POST',
        body: form
    });

    fetch(request)
        .then(response => response.json())
        .then(data => {
            console.log(data)
            printTable();
            document.querySelector('#uploadForm').reset();
        })
});