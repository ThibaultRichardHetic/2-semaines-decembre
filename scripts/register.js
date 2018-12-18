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
register.$info1.addEventListener('mouseenter', (e) =>
{    
    register.$hidden1.classList.remove('hidden-1')
    register.$hidden1.classList.add('show-1')
})
register.$info1.addEventListener('mouseleave', (e) =>
{
    register.$hidden1.classList.remove('show-1')
    register.$hidden1.classList.add('hidden-1')
})

register.$info2.addEventListener('mouseenter', (e) =>
{    
    register.$hidden2.classList.remove('hidden-2')
    register.$hidden2.classList.add('show-2')
})
register.$info2.addEventListener('mouseleave', (e) =>
{
    register.$hidden2.classList.remove('show-2')
    register.$hidden2.classList.add('hidden-2')
})
// hidden information end

// swipe register step start 

// swipe register step end

// AOS.init()

