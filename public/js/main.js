import { validateTitle } from "./titleCheck.js";


/* COOKING JS */
document.addEventListener('DOMContentLoaded', () => {

        const inputTitle = document.querySelector('.input-title')
        const inputTitleError = document.querySelector('.input-title-error');


        if (inputTitle){
            inputTitle.addEventListener('change', (e) => {
            validateTitle(inputTitle, inputTitleError, cookings, e)
            })
        }

        const modal = document.querySelector('.modal')
        const overlay = document.querySelector('.overlay')
        const addRecipe = document.querySelector('.btn-addRecipe')
        const xModal = document.querySelector('.x-modal')         

        function openColoseModal() {
            modal.classList.toggle('hidden')
            overlay.classList.toggle('hidden')

            if(!modal.classList.contains('hidden')){
                document.body.style.overflow = 'hidden'
            } else {
                document.body.style.overflow = ''
            }
        }

        addRecipe.addEventListener('click', openColoseModal)
        xModal.addEventListener('click', openColoseModal)

        document.addEventListener('keydown', function(e){
            if(e.key === 'Escape' && !modal.classList.contains('hidden')){
            openColoseModal()
            }
        })

/* HELPING JS */


        const gemeindeInput = document.querySelector('.gemeinde-input')
        const gemeindeOutput = document.querySelector('.gemeinde-output')
        const inputTitleHelping = document.querySelector('.input-title-helping')
        const inputErrorHelping = document.querySelector('.input-title-error-helping')

 




        if (inputTitleHelping){
            inputTitleHelping.addEventListener('change', (e) => {
            validateTitle(inputTitleHelping, inputErrorHelping, tasks, e)
            })
            
        }
        

        function gemeindePreview(inputText){
            const regex = new RegExp(`^(${inputText})`, 'gi')
            const gemeindenamen = window.gemeinden.map(gemeinde => gemeinde.gemeinde)

            const matches = gemeindenamen.filter(gemeinde => {
                return gemeinde.match(regex)
            })

            if(!inputText){
                gemeindeOutput.innerHTML = ''
                return
            }

            const markup = matches.map(gemeinde => {
                const highlighted = gemeinde.replace(regex, '<b>$1</b>')
                return `<div class="px-2 py-1 hover:bg-gray-200 cursor-pointer rounded-l" data-id='${gemeinde}'>${highlighted}</div>`}).join('');

            gemeindeOutput.innerHTML = markup
        }

        if(gemeindeInput){
        gemeindeInput.addEventListener('input', () => gemeindePreview(gemeindeInput.value))}



/* BOOKS JS */


        const authorResults = document.querySelector('.author-results')
        const authorInput = document.querySelector('.author-input')
        const inputTitleBooks = document.querySelector('.input-title-books')
        const inputTitleErrorBooks = document.querySelector('.input-title-error-books')


        function authorSearch(inputText){
            const regEx = new RegExp(`(^${inputText})`, 'gi')
            let matches = authors.filter( author => {
                return author.match(regEx)
            })
            
            if(inputText === ''){
                authorResults.innerHTML = ''
                return
            }
            
            console.log(matches)
            let html = matches.map(match => {
                const highlight = match.replace(regEx, '<b>$1</b>')
                return `<div class="px-2 py-1 hover:bg-gray-200 cursor-pointer rounded rounded-l" data-id='${match}'>${highlight}</div>`}).join('');
            authorResults.innerHTML = html;
        }

        if(authorResults){
        authorResults.addEventListener('click', function(e){
            const click = e.target
            const data = e.target.dataset.id
            authorInput.value = data
            authorResults.innerHTML = ''

        })}

        if(authorInput){
        authorInput.addEventListener('input', () => authorSearch(authorInput.value))}

        if(inputTitleBooks && inputTitleErrorBooks){
            inputTitleBooks.addEventListener('change', (e) => {
            validateTitle(inputTitleBooks, inputTitleErrorBooks, window.books, e)
            })
        }



        })
