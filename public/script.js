function baseUrl(string) {
    return `http://${window.location.hostname}/${string}`;
}


function req(urls, datas) {
    return axios({
        url: urls,
        method: 'POST',
        headers: {
            "Access-Control-Allow-Origin": "*",
        },
        data: datas
    });
}

$('#login').submit(function (e) {
    e.preventDefault();

    let data  = new FormData();
    const username = $('#login :input')[0];
    const password = $('#login :input')[1];


    data.append('username', username);
    data.append('password', password);


    req(baseUrl('users/login'), data)
    
            .then(function (response) {
                window.location(baseUrl('dashboard'));
            })
            .catch(function () {
                alert('error pass / username salah');
            });
        
})