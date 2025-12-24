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

// function coursesCounter(){
//     if(document.getElementById("my-courses").children.length == 0){
//         document.getElementById("my-courses").previousElementSibling.innerHTML = "Empty for now, go to \"courses list\" to check the available courses";
//     }
//     else{
//         if(document.getElementById("my-courses").previousElementSibling.innerHTML = "My Courses")
//             return;
//         document.getElementById("my-courses").previousElementSibling.innerHTML = "My Courses";
//     }
// }