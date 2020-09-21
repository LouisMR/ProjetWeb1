export default class App {

    static main() {
        var presentation = document.getElementById("divCompo");
        var image = document.getElementById("image");
        presentation.style.display = "none";

        function sectionCompo() {
        var section, name;
            section = document.getElementById("divCompo");
            name = "sectionCompo";
            section.classList.add(name);
            presentation.style.display = "block";
        }

        image.addEventListener("click", sectionCompo);
    }

    static load() {
        return new Promise(resolve => {
            window.addEventListener("load", () => {
                resolve();
            });
        });
    }
}