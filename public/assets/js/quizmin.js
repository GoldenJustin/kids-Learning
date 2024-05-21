const quiz = document.getElementById('quiz');
const result = document.getElementById('result');
const scoreList = document.getElementById('scoreList');
const totalScore = document.getElementById('totalScore');
const questionNumber = document.getElementById('questionNumber');
const questionText = document.getElementById('question');
const choices = document.querySelectorAll('input[name="userAnswer"]');
const quizForm = document.getElementById('quizForm');
const totalScoreElement = document.getElementById('totalScore');


let score = 0;
let questionIndex = 0;
const questions = generateQuestions();

// quizForm.addEventListener('submit', function(event) {
//     event.preventDefault();
//     const userAnswer = parseInt(document.querySelector('input[name="userAnswer"]:checked').value);

//     if (!isNaN(userAnswer)) {
//         if (userAnswer === questions[questionIndex].correctIndex) {
//             score++;
//         }

//         questionIndex++;

//         if (questionIndex < questions.length) {
//             displayQuestion(questions[questionIndex], questionIndex + 1);
//         } else {
//             displayResults();
//         }
//     }
// });

// Get the total score element

quizForm.addEventListener('submit', function(event) {
    event.preventDefault();
    const userAnswer = parseInt(document.querySelector('input[name="userAnswer"]:checked').value);

    if (!isNaN(userAnswer)) {
        if (userAnswer === questions[questionIndex].correctIndex) {
            score++;
        }

        questionIndex++;

        if (questionIndex < questions.length) {
            displayQuestion(questions[questionIndex], questionIndex + 1);
        } else {
            // Set the total score before submitting the form
            document.getElementById('quizScore').value = score;

            // Submit the form
            this.submit();
            displayResults();
        }
    }
});

function generateQuestions() {
    const questions = [];
    for (let i = 0; i < 10; i++) {
        const num1 = Math.floor(Math.random() * 100);
        const num2 = Math.floor(Math.random() * 100);
        const correctAnswer = num1 - num2;
        const choices = [correctAnswer];
        while (choices.length < 4) {
            const choice = Math.floor(Math.random() * 200);
            if (!choices.includes(choice)) {
                choices.push(choice);
            }
        }
        choices.sort(() => Math.random() - 0.5);
        const correctIndex = choices.indexOf(correctAnswer);
        questions.push({ num1, num2, choices, correctIndex });
    }
    return questions;
}

function displayQuestion(question, number) {
    questionNumber.textContent = number;
    questionText.textContent = `${question.num1} - ${question.num2} =`;

    choices.forEach((choice, index) => {
        choice.nextElementSibling.textContent = question.choices[index];
    });
}

function displayResults() {
    quiz.style.display = 'none';
    result.style.display = 'block';
    totalScore.textContent = score;

    // Calculate total score
    const totalScoreValue = score;

    // Send AJAX request to store quiz result
    fetch('/store-quiz-result', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ quiz_score: totalScoreValue })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Failed to store quiz result');
        }
        return response.json();
    })
    .then(data => {
        console.log('Quiz result stored successfully:', data);
    })
    .catch(error => {
        console.error('Error storing quiz result:', error);
    });

    // Display quiz result to user
    questions.forEach((question, index) => {
        const li = document.createElement('li');
        li.textContent = `Question ${index + 1}: ${question.num1} - ${question.num2} = ${question.choices[question.correctIndex]}`;
        if (question.correctIndex === questions[index].correctIndex) {
            li.style.color = 'green';
        } else {
            li.style.color = 'red';
        }
        scoreList.appendChild(li);
    });
}

displayQuestion(questions[questionIndex], questionIndex + 1);
quiz.style.display = 'block';



