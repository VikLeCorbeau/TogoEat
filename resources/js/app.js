require('./bootstrap');

// Menus
//=============

if (document.querySelector(".menu-icon")) {
    document.querySelector(".menu-icon").addEventListener('click', () => {
        document.querySelector(".menu-global.left").classList.add("active");
    });
}


if (document.querySelector(".user-icon")) {
    document.querySelector(".user-icon").addEventListener('click', () => {
        document.querySelector(".menu-global.right").classList.add("active");
    });
}

if (document.querySelectorAll('.menu-exit')) {
    document.querySelectorAll('.menu-exit').forEach(exit => {
        exit.addEventListener('click', () => {
            exit.parentElement.classList.remove('active');
        })
    });
}

// Command Edit State
// ====================

if (document.querySelectorAll(".small-article-command")) {
    document.querySelectorAll(".small-article-command").forEach(command => {
        command.addEventListener('click', () => {
            document.querySelector('#changeState').classList.add('active');
        })
    });
}

if (document.querySelector('#closeChangeState')) {
    document.querySelector('#closeChangeState').addEventListener('click', () => {
        document.querySelector('#changeState').classList.remove('active');
    })
}

// Command Edit Articles
// ========================
if (document.querySelectorAll(".icon-edit-command")) {
    document.querySelectorAll(".icon-edit-command").forEach(command => {
        command.addEventListener('click', () => {
            document.querySelector('#changeArticle').classList.add('active');
        })
    });
}

if (document.querySelector('#closeChangeArticle')) {
    document.querySelector('#closeChangeArticle').addEventListener('click', () => {
        document.querySelector('#changeArticle').classList.remove('active');
    })    
}

