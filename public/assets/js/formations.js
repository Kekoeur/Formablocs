document.addEventListener("DOMContentLoaded", function(){
    let btns = document.getElementsByClassName('display_module');
    for(let btn of btns){
        btn.addEventListener('click', display_module);
		btn.addEventListener('click', () => {
			btn.classList.toggle('rotate-btn');
		})
    }
});

function display_module(evt){
    let parent = evt.target.parentNode.parentNode;
	console.log(parent)
    let modules = parent.getElementsByClassName('module');

    for (let m of modules){
		m.classList.toggle('module-active');
    }
}