export function validateTitle(input, output, array, event){            
    const inputForm = event.target.value.trim()
                output.innerHTML = ''
                input.classList.remove('border-red-500')
        
    const exists = Object.values(array).some(c => c.title === inputForm)
            if(exists){
                output.innerHTML = '<p>Titel schon vergeben</p>'
                input.classList.add('border-red-500')
            }
}


        