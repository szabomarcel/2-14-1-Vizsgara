const startButton = document.getElementById('start-btn')
const nextButton = document.getElementById('next-btn')
const questionContainerElement = document.getElementById('question-container')
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')

let shuffledQuestions, currentQuestionIndex

startButton.addEventListener('click', startGame)
nextButton.addEventListener('click', () => {
  currentQuestionIndex++
  setNextQuestion()
})

function startGame() {
  startButton.classList.add('hide')
  shuffledQuestions = questions.sort(() => Math.random() - .5)
  currentQuestionIndex = 0
  questionContainerElement.classList.remove('hide')
  setNextQuestion()
}

function setNextQuestion() {
  resetState()
  showQuestion(shuffledQuestions[currentQuestionIndex])
}

function showQuestion(question) {
  questionElement.innerText = question.question
  question.answers.forEach(answer => {
    const button = document.createElement('button')
    button.innerText = answer.text
    button.classList.add('btn')
    if (answer.correct) {
      button.dataset.correct = answer.correct
    }
    button.addEventListener('click', selectAnswer)
    answerButtonsElement.appendChild(button)
  })
}

function resetState() {
  clearStatusClass(document.body)
  nextButton.classList.add('hide')
  while (answerButtonsElement.firstChild) {
    answerButtonsElement.removeChild(answerButtonsElement.firstChild)
  }
}


function selectAnswer(e) {
  const selectedButton = e.target
  const correct = selectedButton.dataset.correct
  setStatusClass(document.body, correct)
  Array.from(answerButtonsElement.children).forEach(button => {
    setStatusClass(button, button.dataset.correct)
  })
  if (shuffledQuestions.length > currentQuestionIndex + 1) {
    nextButton.classList.remove('hide')
  } else {
    startButton.innerText = 'Újra kitöltöm'
    startButton.classList.remove('hide')
  }
}

function setStatusClass(element, correct) {
  clearStatusClass(element)
  if (correct) {
    element.classList.add('correct')
  } else {
    element.classList.add('wrong')
  }
}

function clearStatusClass(element) {
  element.classList.remove('correct')
  element.classList.remove('wrong')
}

const questions = [
  {
    question: 'Hány gólt szerzett eddig ifj Lisztes krisztián a Ferencváros csapatában?',
    answers: [
      { text: '6', correct: false },
      { text: '7', correct: true },
      { text: '8', correct: false },
      { text: '10', correct: false }
    ]
  },
  {
    question: 'Hány KTE futballista Magyar válogatott jelenleg?',
    answers: [
      { text: '5', correct: false },
      { text: '4', correct: false },
      { text: '1', correct: false },
      { text: '3', correct: true }
    ]
  },
  {
    question: 'Hanyadik selejtező körig jutott el a DVSC a legutóbbi Konferencia liga kiírásban?',
    answers: [
      { text: '3', correct: true },
      { text: '5', correct: false },
      { text: '2', correct: false },
      { text: '1', correct: false }
    ]
  },
  {
    question: 'Ki az Újpest FC házi gólkirálya jelenleg?',
    answers: [
      { text: 'Peter Ambrose', correct: false },
      { text: 'Csoboth Kevin', correct: false },
      { text: 'Matija Ljujic', correct: true },
      { text: 'Heinz Morschel', correct: false }
    ]
  },
  {
    question: 'A bajnokság hanyadik helyen végzett az előző szezonban a Puskás Akadémia?',
    answers: [
      { text: 'negyedik', correct: true },
      { text: 'ötödik', correct: false },
      { text: 'hetedik', correct: false },
      { text: 'második', correct: false }
    ]
  },
  {
    question: 'Az NB1 előző szezonjában melyik két csapat esett ki?',
    answers: [
      { text: 'Budapest Honvéd/Kisvárda', correct: false },
      { text: 'Vasas/Mezőkövesd', correct: false },
      { text: 'Budapest Honvéd/Vasas', correct: true },
      { text: 'ZTE/Fehérvár FC', correct: false }
    ]
  },
  {
    question: 'Hány mérkőzést nyert meg a Vasas tavaly az NB1-ben?',
    answers: [
      { text: '5', correct: false },
      { text: '4', correct: true },
      { text: '7', correct: false },
      { text: '10', correct: false }
    ]
  },
  {
    question: 'Melyik csapat nyerte tavaly a Mol Magyar kupát?',
    answers: [
      { text: 'ZTE', correct: true },
      { text: 'Ferencvárosi TC', correct: false },
      { text: 'Budafok', correct: false },
      { text: 'Újpest FC', correct: false }
    ]
  },
  {
    question: 'Hány külföldi játékos szerepel a Paksi FC csapatában?',
    answers: [
      { text: '2', correct: false },
      { text: '5', correct: false },
      { text: '3', correct: false },
      { text: '0', correct: true }
    ]
  },
  {
    question: 'Mennyit fizetett a Liverpool Szoboszlai Dominikért a nyáron?',
    answers: [
      { text: '35 millió eurót', correct: false },
      { text: '50 millió eurót', correct: false },
      { text: '80 millió eurót', correct: true },
      { text: '70 millió eurót', correct: false }
    ]
  },
  {
    question: 'Melyik Angol csapatba igazolt nyáron Kerkez Milos',
    answers: [
      { text: 'Bournemouth', correct: true },
      { text: 'Wolverhampton', correct: false },
      { text: 'Leicester City', correct: false},
      { text: 'Fulham', correct: false }
    ]
  },
  {
    question: 'Melyik bajnokságban futballozik jelenleg Vancsa Zalán?',
    answers: [
      { text: 'Holland Bajnokság', correct: false },
      { text: 'Belga Bajnokság', correct: true },
      { text: 'Norvég Bajnokság', correct: false },
      { text: 'Lengyel Bajnokság', correct: false }
    ]
  },
  {
    question: 'Ki volt az NB1 gólkirálya a tavalyi szezonban?',
    answers: [
      { text: 'Horváth Krisztofer', correct: false },
      { text: 'Dorian Babunski', correct: false },
      { text: 'Adama Traore', correct: false },
      { text: 'Varga Barnabás', correct: true }
    ]
  },
  {
    question: 'Melyik két csapat jutott fel újoncként az NB1-be 2023 nyarán?',
    answers: [
      { text: 'DVTK/Győri Eto', correct: false },
      { text: 'Nyíregyháza/Szeged', correct: false },
      { text: 'DVTK/MTK', correct: true },
      { text: 'MTK/Haladás FC', correct: false }
    ]
  },
  {
    question: 'Melyik az NB1 legnagyobb stadionja?',
    answers: [
      { text: 'Groupama Aréna(Ferencváros)', correct: true },
      { text: 'Nagyerdei Stadion(Debrecen)', correct: false },
      { text: 'MOl Aréna Sóstó(Fehérvár FC)', correct: false },
      { text: 'Pancho Aréna(Puskás Akadémia)', correct: false }
    ]
  },
]

