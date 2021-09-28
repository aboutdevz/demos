function baseUrl(string) {
    return `http://${window.location.hostname}/elisoft/${string}`;
}


function req(urls, datas) {
    return axios({
        url: urls,
        method: 'POST',
        data: datas
    });
}

// $('#login').submit(function (e) {
//     e.preventDefault();

//     let data  = new FormData();
//     const username = $('#login :input')[0];
//     const password = $('#login :input')[1];


//     data.append('username', username);
//     data.append('password', password);


//     req(baseUrl('Login/login'), data)
    
//             .then(function (response) {
//                 window.location(baseUrl('dashboard'));
//             })
//             .catch(function () {
//                 alert('error pass / username salah');
//             });
        
// })

// validation

const constraints = {
    password: {
      // Password is also required
      presence: {message: "password harus di isi"},
      // And must be at least 5 characters long
      length: {
        minimum: 6,
        message: "^password harus terdiri dari 6 karakter"
      }
    },
    cnfPassword: {
      // You need to confirm your password
      presence: {message: "konfirmasi password harus di isi"},
      // and it needs to be equal to the other password
      length: {
        minimum: 6,
        message: "^password harus terdiri dari 6 karakter"
      },
      equality: {
        attribute: "password",
        message: "^password harus sama dengan kolom sebelumnya"
      }
    },
    username: {
      // You need to pick a username too
      presence: {message: "username harus di isi"},
      email: true,
      // And it must be between 3 and 20 characters long
    },
};


$('#register input').each(function () {
    this.addEventListener('input',() => {
        const form = $('#register');
        let error = validate(form,constraints);
        formValidateMsg(error);
    });
});

function formValidateMsg(msg) {
    const invalidContainer = $('.feedback');
    const btnSubmit = $('#register .btnSubmit');
    
    if( msg ) {
        if (msg.username) {
            invalidContainer[0].innerHTML = `${msg.username.join(' ')}`
        } else {
            invalidContainer[0].innerHTML = '';
        }
        if (msg.password) {
            invalidContainer[1].innerHTML = `${msg.password.join(' ')}`;
        } else {
            invalidContainer[1].innerHTML = '';
        }
        if (msg.cnfPassword) {
            invalidContainer[2].innerHTML = `${msg.cnfPassword.join(' ')}`;
        } else {
            invalidContainer[2].innerHTML = '';
        }

        btnSubmit.prop('disabled',true);
    } else {
        invalidContainer.each(function () {
            invalidContainer.html("");
        });
        btnSubmit.prop('disabled',false);
    }
}