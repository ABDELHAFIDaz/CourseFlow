function openModal(id) {
    document.getElementById(id).style.display = "flex";
}

function closeModal(id) {
    document.getElementById(id).style.display = "none";
}

window.onclick = function(e) {
    if (e.target.classList.contains("modal")) {
        e.target.style.display = "none";
    }
}

function formSwitcher(){
    document.getElementById("sign-in-form").classList.toggle("hidden");
    document.getElementById("login-form").classList.toggle("hidden");
    console.log('hello mate')
}
document.getElementById("goToLogin").addEventListener("click", formSwitcher);
document.getElementById("goToSignUp").addEventListener("click", formSwitcher);

// form hundler================================

