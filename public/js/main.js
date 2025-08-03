/* COOKING JS */
        
        const inputTitle = document.querySelector('.input-title')
        const inputTitleError = document.querySelector('.input-title-error');

        import { validateTitle } from "./titleCheck.js";



        if (inputTitle){
            inputTitle.addEventListener('change', (e) => {
            validateTitle(inputTitle, inputTitleError, window.cookingTitles, e)
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

/* COOKING JS */


        