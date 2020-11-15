import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

class RichText extends HTMLTextAreaElement {
    constructor() {
        // Toujours appeler "super" d'abord dans le constructeur
        super()

        // Ecrire la fonctionnalité de l'élément ici

        ClassicEditor.create(this)
    }
}

customElements.define('rich-text', RichText, {extends: 'textarea'})
