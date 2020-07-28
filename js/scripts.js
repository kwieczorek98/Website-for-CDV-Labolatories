/* functions */

var about__image = document.getElementById('about__image');

function about__image__mouse_over(){

    document.getElementById('about__image').setAttribute(
        "style", "opacity: 0.8;");

}


function about__image__mouse_out(){
    document.getElementById('about__image').setAttribute(
        "style", "opacity: 1; transition: 0.5s;");
}


about__image.addEventListener("mouseover", about__image__mouse_over);
about__image.addEventListener("mouseout", about__image__mouse_out);

