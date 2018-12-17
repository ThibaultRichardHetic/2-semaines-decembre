const register = {}
register.$step1 = document.querySelector('.js-section--step1')
register.$hidden1 = document.querySelector('.js-hidden-1')
register.$hidden2 = document.querySelector('.js-hidden-2')
register.$info1 = document.querySelector('.js-info-1')
register.$info2 = document.querySelector('.js-info-2')

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

// swipe register step end
