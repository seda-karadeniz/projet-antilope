
class DW_Controller
{

    constructor()
    {
        // Ici, le DOM n'est pas encore prêt
        // Pour le moment, rien à faire.

    }

    run()
    {


        function reveal() {
            let reveals = document.querySelectorAll(".reveal");


            for (let i = 0; i < reveals.length; i++) {

                let windowHeight = window.innerHeight;
                let elementTop = reveals[i].getBoundingClientRect().top;
                let elementVisible = 10;

                reveals[i].classList.add('js');

                if (elementTop < windowHeight - elementVisible) {

                    reveals[i].classList.add("active");
                } else {

                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);



    }
}

window.dw = new DW_Controller();
window.addEventListener('load', () => window.dw.run());
