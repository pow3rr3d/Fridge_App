// Default SortableJS
import Sortable from 'sortablejs';

//Variable pour SortableJS
const div = document.querySelector('#page_sections')


Sortable.create(div, {
    // handle: '.handle',
    animation: 150,
    ghostClass: 'sortable-ghost',
    filter: 'button',
    onEnd: (/**Event*/evt) => {
        reorderingSections();
    }
});

//déclaration de la fonction
let reorderingSections = () => {


    const p = document.querySelector('#page_sections').querySelectorAll('input');
    const t = document.querySelector('#page_sections').querySelectorAll('textarea');
    const d = document.querySelector('#page_sections').querySelectorAll('.picker');


    // Array.from(p).map(e => {
    //     let i = -1
    //     let j = -1
    //     i++
    //     j += (i % 2n   === 0) ? 1 : 0;
    //
    //     e.name = e.name.replace(/\[([0-9]+)\]/, '[' + j + ']')
    //     // e.name.replace(/\[([0-9]+)\]/, '[' + j + ']')
    //
    //
    // })



    // all.map(e => {
    //     i++
    //     j += (i % 3 === 0) ? 1 : 0;
    //
    //     e.forEach(el => {
    //
    //         el.name.replace(/\[([0-9]+)\]/, '[' + j + ']')
    //
    //     })

    // })


    // Array.from(p).map(e => {
    //     i++
    //     j += (i % 3 === 0) ? 1 : 0;
    //
    //
    //     e.name.replace(/\[([0-9]+)\]/, '[' + j + ']')
    //
    // })
    // Array.from(t).map(e => {
    //     i++
    //     j += (i % 3 === 0) ? 1 : 0;
    //
    //
    //     e.name.replace(/\[([0-9]+)\]/, '[' + j + ']')
    //
    //
    // })
    // Array.from(d).map(e => {
    //     i++
    //     j += (i % 3 === 0) ? 1 : 0;
    //
    //
    //     e.name.replace(/\[([0-9]+)\]/, '[' + j + ']')
    //     console.log(e)
    //
    // })
}