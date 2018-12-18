const register = {}
register.$hidden1 = document.querySelector('.js-hidden-1')
register.$hidden2 = document.querySelector('.js-hidden-2')
register.$info1 = document.querySelector('.js-info-1')
register.$info2 = document.querySelector('.js-info-2')

const step1 = {}
step1.$section = document.querySelector('.js-section--step1')
step1.$next = step1.$section.querySelector('.js-next')
step1.$back = step1.$section.querySelector('.js-back')

const step2 = {}
step2.$section = document.querySelector('.js-section--step2')
step2.$next = step2.$section.querySelector('.js-next')
step2.$back = step2.$section.querySelector('.js-back')

const step3 = {}
step3.$section = document.querySelector('.js-section--step3')
step3.$next = step3.$section.querySelector('.js-next')
step3.$back = step3.$section.querySelector('.js-back')

const step4 = {}
step4.$section = document.querySelector('.js-section--step4')
step4.$next = step4.$section.querySelector('.js-next')
step4.$back = step4.$section.querySelector('.js-back')

const step5 = {}
step5.$section = document.querySelector('.js-section--step5')
step5.$next = step5.$section.querySelector('.js-next')
step5.$back = step5.$section.querySelector('.js-back')


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


// start slider register 

function nextStep(_step, _stepNext)
{
    _step.style.transform = 'translateX(-200%)'
    _step.style.transitionProperty = 'all'
    _step.style.transitionDuration = '0.4s'
    _step.style.transitionTimingFunction = 'ease'

    _stepNext.style.transform = 'translateX(50%)'
    _stepNext.style.transitionProperty = 'all'
    _stepNext.style.transitionDuration = '0.4s'
    _stepNext.style.transitionTimingFunction = 'ease'
}

function nextStep2(_step, _stepNext)
{
    _step.style.transform = 'translateX(-200%)'
    _step.style.transitionProperty = 'all'
    _step.style.transitionDuration = '0.4s'
    _step.style.transitionTimingFunction = 'ease'

    _stepNext.style.transform = 'translateX(20%)'
    _stepNext.style.transitionProperty = 'all'
    _stepNext.style.transitionDuration = '0.4s'
    _stepNext.style.transitionTimingFunction = 'ease'
}

function backStep(_step, _stepBack)
{
    _step.style.transform = 'translateX(200%)'
    _step.style.transitionProperty = 'all'
    _step.style.transitionDuration = '0.4s'
    _step.style.transitionTimingFunction = 'ease'

    _stepBack.style.transform = 'translateX(0%)'
    _stepBack.style.transitionProperty = 'all'
    _stepBack.style.transitionDuration = '0.4s'
    _stepBack.style.transitionTimingFunction = 'ease'
}
function backStep2(_step, _stepBack)
{
    _step.style.transform = 'translateX(200%)'
    _step.style.transitionProperty = 'all'
    _step.style.transitionDuration = '0.4s'
    _step.style.transitionTimingFunction = 'ease'

    _stepBack.style.transform = 'translateX(50%)'
    _stepBack.style.transitionProperty = 'all'
    _stepBack.style.transitionDuration = '0.4s'
    _stepBack.style.transitionTimingFunction = 'ease'
}
function backStep3(_step, _stepBack)
{
    _step.style.transform = 'translateX(200%)'
    _step.style.transitionProperty = 'all'
    _step.style.transitionDuration = '0.4s'
    _step.style.transitionTimingFunction = 'ease'

    _stepBack.style.transform = 'translateX(20%)'
    _stepBack.style.transitionProperty = 'all'
    _stepBack.style.transitionDuration = '0.4s'
    _stepBack.style.transitionTimingFunction = 'ease'
}

step1.$next.addEventListener('click', () =>
{
    nextStep(step1.$section, step2.$section)
})

step2.$next.addEventListener('click', () =>
{
    nextStep2(step2.$section, step3.$section)
})
step2.$back.addEventListener('click', () =>
{
    backStep(step2.$section, step1.$section)
})

step3.$next.addEventListener('click', () =>
{
    nextStep(step3.$section, step4.$section)
})
step3.$back.addEventListener('click', () =>
{
    backStep2(step3.$section, step2.$section)
})

step4.$next.addEventListener('click', () =>
{
    nextStep(step4.$section, step5.$section)
})
step4.$back.addEventListener('click', () =>
{
    backStep3(step4.$section, step3.$section)
})

step5.$back.addEventListener('click', () =>
{
    backStep2(step5.$section, step4.$section)
})


// end slider register 
