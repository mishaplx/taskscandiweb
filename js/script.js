const disk = document.querySelector('.form__disk')
const furniture = document.querySelector('.form__furniture')
const book = document.querySelector('.form__book')

const box1 = document.querySelector('.box1')




function changeFunc() {
    if (box1.value == 'disc') {
        
        disk.style.display = 'inline-block'
        furniture.style.display = 'none'
        book.style.display = 'none'
    }
    else if (box1.value == 'Furniture'){

        disk.style.display = 'none'
        furniture.style.display = 'inline-block'
        book.style.display = 'none'
    }
    else if (box1.value == 'null'){

        disk.style.display = 'none'
        furniture.style.display = 'none'
        book.style.display = 'none'
    }
    else{
        disk.style.display = 'none'
        furniture.style.display = 'none'
        book.style.display = 'inline-block'
    }
}
function cancle(){
    document.getElementById("cancle").reset();
}
