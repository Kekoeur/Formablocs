document.addEventListener("DOMContentLoaded", function(){
    let btns = document.getElementsByClassName('display_module')
    for(let btn of btns){
        btn.addEventListener('click', display_module)
    }
});
function display_module(evt){
    let parent = evt.target.parentNode;
    let modules = parent.getElementsByClassName('module')
    console.log(modules)
    for (let m of modules){
        switch_display(m)
    }
}
function switch_display(m){
    let style = m.style.display
    if(style === 'none'){
        m.style.display = 'flex'
    } else {
        m.style.display = 'none'
    }
}