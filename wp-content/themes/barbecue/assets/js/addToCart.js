let buttons = document.querySelectorAll('.universal-card__add__button')
let values = document.querySelectorAll('.universal-card__add__input')




for(let button of buttons){
    let ID = button.classList[1]

    button.onclick = function(){
        let value = document.querySelector('.universal-card__add__input.'+CSS.escape(ID)).value

        let req = new XMLHttpRequest();
        req.open('POST', './?wc-ajax=add_to_cart')
        let formData = new FormData();
        formData.append('product_id',ID)
        formData.append('quantity', value)
        req.send(formData)
    }
}
