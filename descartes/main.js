//time line de gsap
tl = gsap.timeline();
// Debug de l'animation en hors connexion.
translated = document.getElementById('translated');

tl.to("#translated", {
    duration : 0.1,
    x : 0,
    y : 300
});


//Gestion
mainGestion = document.getElementById('gestion')
gestionText = document.getElementById('gestionText');
question = document.getElementById('question');
reponse = document.getElementById('reponse');
changerMode = document.getElementById('changerMode');
mode = "question";

function changeMode(){
    if (mode === "question"){
        mode = "reponse";
        question.type = 'hidden';
        reponse.type = 'text';
        changerMode.innerHTML = "Mode question";
        gestionText.innerHTML = "ÉCRIVEZ UNE RÉPONSE";
        gestionText.innerHTML = reponse.value;
    } else if (mode === "reponse"){
        mode = "question";
        question.type = 'text';
        reponse.type = 'hidden';
        changerMode.innerHTML = "Mode réponse";
        gestionText.innerHTML = "ÉCRIVEZ UNE QUESTION";
        gestionText.innerHTML = question.value;
    }

    //formatage du text après le changement de mode
    if (mode === "question"){
        if (((question.value).includes("\\(") && (question.value).includes("\\)"))){
            let debut = (question.value).indexOf("\\(");
            let fin = (question.value).indexOf("\\)");
            if (debut >= 0 && fin >= 0 && debut < fin){
                textMath = (question.value).slice(debut +2, fin);
            }
            katex.render(textMath, gestionText, {
                trowOnError : false,
            });
        } else{
            if (question.value === ''){
                gestionText.innerHTML = "ÉCRIVEZ UNE QUESTION";
            } else{
                gestionText.innerHTML = question.value;
            }
        }
    } else if (mode === "reponse"){
        if ((reponse.value).includes("\\(") && (reponse.value).includes("\\)")){
            let debut = (reponse.value).indexOf("\\(");
            let fin = (reponse.value).indexOf("\\)");
            if (debut >= 0 && fin >= 0 && debut < fin){
                textMath = (reponse.value).slice(debut +2, fin);
            }
            katex.render(textMath, gestionText, {
                trowOnError : false,
            });
        } else{
            if (reponse.value === ''){
                gestionText.innerHTML = "ÉCRIVEZ UNE RÉPONSE";
            } else{
                gestionText.innerHTML = reponse.value;
            }
        }
    }
    tl.to("#gestion", {
        duration : 1,
        rotate : 360,
        ease : "elastic"
    });
    tl.restart();
};


mainGestion.addEventListener('click', () => {
    if (mode === "question"){
        if ((question.value).includes("\\(") && (question.value).includes("\\)")){
            let debut = (question.value).indexOf("\\(");
            let fin = (question.value).indexOf("\\)");
            if (debut >= 0 && fin >= 0 && debut < fin){
                textMath = (question.value).slice(debut +2, fin);
            }
            katex.render(textMath, gestionText, {
                trowOnError : false,
            });
        } else{
            gestionText.innerHTML = question.value;
        }
    } else if (mode === "reponse"){
        if ((reponse.value).includes("\\(") && (reponse.value).includes("\\)")){
            let debut = (reponse.value).indexOf("\\(");
            let fin = (reponse.value).indexOf("\\)");
            if (debut >= 0 && fin >= 0 && debut < fin){
                textMath = (reponse.value).slice(debut +2, fin);
            }
            katex.render(textMath, gestionText, {
                trowOnError : false,
            });
        } else{
            gestionText.innerHTML = reponse.value;
        }
    }
});



// translated.addEventListener('click', () => {
//     animeB();
// });


// function animeB(){
//     tl.clear();
//     tl.to("#translated", {
//         duration : 0.1,
//         x : 50,

//     });
//     tl.to("#translated", {
//         duration : 0.1,
//         x : -50,

//     });
//     tl.to("#translated", {
//         duration : 0.1,
//         x : 50,

//     });
//     tl.to("#translated", {
//         duration : 0.1,
//         x : -50,

//     });
//     tl.to("#translated", {
//         duration : 0.1,
//         x : 0,
//     });
// }


// function animeA(){
//     tl.to("#translated", {
//         duration : 2,
//         rotate : 360,
//         backgroundColor : "green",
//         ease : "elastic"
//     });
//     tl.restart();
// }