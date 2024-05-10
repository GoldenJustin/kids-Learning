const quiz = document.getElementById('quiz');
const result = document.getElementById('result');
const scoreList = document.getElementById('scoreList');
const totalScore = document.getElementById('totalScore');
const questionNumber = document.getElementById('questionNumber');
const questionText = document.getElementById('question');
const choices = document.querySelectorAll('input[name="userAnswer"]');
const quizForm = document.getElementById('quizForm');

let score = 0;
let questionIndex = 0;
const questions = generateQuestions();

quizForm.addEventListener('submit', function(event) {
    event.preventDefault();
    const userAnswer = document.querySelector('input[name="userAnswer"]').value.trim().toUpperCase();

    if (userAnswer === questions[questionIndex].correctAnswer) {
        score++;
    }

    questionIndex++;

    if (questionIndex < questions.length) {
        displayQuestion(questions[questionIndex], questionIndex + 1);
    } else {
        displayResults();
    }
});

function generateQuestions() {
    const questions = [];
    const alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const shuffledAlphabet = alphabet.split('').sort(() => Math.random() - 0.5);

    for (let i = 0; i < 10; i++) {
        const correctAnswer = shuffledAlphabet[i];
        questions.push({ correctAnswer });
    }
    return questions;
}

function displayQuestion(question, number) {
    questionNumber.textContent = number;
    questionText.textContent = `What letter comes next in the sequence: A, B, C, ...?`;

    choices.forEach((choice, index) => {
        choice.nextElementSibling.textContent = question.correctAnswer.charCodeAt(0) + index;
    });
}

function displayResults() {
    quiz.style.display = 'none';
    result.style.display = 'block';
    totalScore.textContent = score;
    questions.forEach((question, index) => {
        const li = document.createElement('li');
        li.textContent = `Question ${index + 1}: The correct answer is ${question.correctAnswer}`;
        if (index + 1 === score) {
            li.style.color = 'green';
        } else {
            li.style.color = 'red';
        }
        scoreList.appendChild(li);
    });
}

displayQuestion(questions[questionIndex], questionIndex + 1);
quiz.style.display = 'block';
