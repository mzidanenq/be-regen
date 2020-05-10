
let formContainer = document.getElementById('forms');
const signInButton = document.getElementById("signIn");
const signUpButton = document.getElementById('signUp');
let bool = false;

function classToggle(){
    bool = !bool
    if(bool){
        formContainer.classList.add('sign-up-active');
    } else {
        formContainer.classList.remove('sign-up-active');
    }
}


signInButton.addEventListener('click', classToggle)
signUpButton.addEventListener('click', classToggle)