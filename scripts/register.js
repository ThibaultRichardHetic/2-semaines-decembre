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
step5.$next = step5.$section.querySelector('.js-next-inscription')
step5.$back = step5.$section.querySelector('.js-back')

const step6 = {}
step6.$section = document.querySelector('.js-section--step6')


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

function nextStep3(_step, _stepNext)
{
    _step.style.transform = 'translateX(-200%)'
    _step.style.transitionProperty = 'all'
    _step.style.transitionDuration = '0.4s'
    _step.style.transitionTimingFunction = 'ease'

    _stepNext.style.transform = 'translateX(125%)'
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

step5.$next.addEventListener('click', () =>
{
    nextStep3(step5.$section, step6.$section)
})
step5.$back.addEventListener('click', () =>
{
    backStep2(step5.$section, step4.$section)
})


// end slider register 


// register draggable file start

let dropFileForm = document.getElementById("dropFileForm");
let fileLabelText = document.getElementById("fileLabelText");
let uploadStatus = document.getElementById("uploadStatus");
let fileInput = document.getElementById("fileInput");
let droppedFiles;

function overrideDefault(event) {
  event.preventDefault();
  event.stopPropagation();
}

function fileHover() {
  dropFileForm.classList.add("fileHover");
}

function fileHoverEnd() {
  dropFileForm.classList.remove("fileHover");
}

function addFiles(event) {
  droppedFiles = event.target.files || event.dataTransfer.files;
  showFiles(droppedFiles);
}

function showFiles(files) {
  if (files.length > 1) {
    fileLabelText.innerText = files.length + " files selected";
  } else {
    fileLabelText.innerText = files[0].name;
  }
}

function uploadFiles(event) {
  event.preventDefault();
  changeStatus("Uploading...");

  let formData = new FormData();

  for (let i = 0, file; (file = droppedFiles[i]); i++) {
    formData.append(fileInput.name, file, file.name);
  }

  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(data) {
    //handle server response and change status of
    //upload process via changeStatus(text)
    console.log(xhr.response);
  };
  xhr.open(dropFileForm.method, dropFileForm.action, true);
  xhr.send(formData);
}

function changeStatus(text) {
  uploadStatus.innerText = text;
}

// register draggable end
