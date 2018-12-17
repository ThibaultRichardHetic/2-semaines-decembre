const register = {}
register.$hidden1 = document.querySelector('.js-hidden-1')
register.$hidden2 = document.querySelector('.js-hidden-2')
register.$info1 = document.querySelector('.js-info-1')
register.$info2 = document.querySelector('.js-info-2')
register.$step1 = document.querySelector('.js-section--step1')
register.$step2 = document.querySelector('.js-section--step2')
register.$step3 = document.querySelector('.js-section--step3')
register.$step4 = document.querySelector('.js-section--step4')
register.$step5 = document.querySelector('.js-section--step5')
register.$step6 = document.querySelector('.js-section--step6')
register.$step7 = document.querySelector('.js-section--step7')

// hidden information start
register.$info1.addEventListener('mouseenter', () =>
{    
    register.$hidden1.classList.remove('hidden-1')
    register.$hidden1.classList.add('show-1')
    console.log('je suis dessus')
})
register.$info1.addEventListener('mouseleave', () =>
{
    register.$hidden1.classList.remove('show-1')
    register.$hidden1.classList.add('hidden-1')
})

register.$info2.addEventListener('mouseenter', () =>
{    
    register.$hidden2.classList.remove('hidden-2')
    register.$hidden2.classList.add('show-2')
    console.log('je suis dessus')
})
register.$info2.addEventListener('mouseleave', () =>
{
    register.$hidden2.classList.remove('show-2')
    register.$hidden2.classList.add('hidden-2')
})
// hidden information end

// swipe register step start 

function stepPosition() 
{
    register.$step1.style.transform = "translateX(100%)"
    register.$step2.style.transform = "translateX(200%)"
    register.$step3.style.transform = "translateX(300%)"
    register.$step4.style.transform = "translateX(400%)"
    register.$step5.style.transform = "translateX(500%)"
    register.$step6.style.transform = "translateX(600%)"
    register.$step7.style.transform = "translateX(700%)" 
}
//stepPosition()

// swipe register step end