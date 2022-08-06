import './bootstrap';

import Alpine from 'alpinejs';

document.addEventListener('alpine:init', () => {
    Alpine.data('clipboard', function(text = ''){
        return {
            text: text,
            copy(){
                navigator.clipboard.writeText(text)
                    .then(
                        success => alert('Text copied'),
                        error => alert("Item could not be copied")
                    )
            },
            paste(){
                navigator.clipboard.readText()
                    .then(
                        text =>{
                            this.text = this.text = text
                            alert("Pasted")
                        },
                    )
            }
        }
    })
})


window.Alpine = Alpine;

Alpine.start();
