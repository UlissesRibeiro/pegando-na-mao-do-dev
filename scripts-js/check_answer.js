
function checkAnswer(questionId, correctAnswer) {
    let userAnswer = document.getElementById(questionId).value.trim().toLowerCase();
    let feedback = document.getElementById('feedback-' + questionId);
    if (userAnswer === correctAnswer.toLowerCase()) {
        feedback.textContent = "✅ Correto!";
        feedback.style.color = "green";
    } else {
        feedback.textContent = "❌ Incorreto!";
        feedback.style.color = "red";
    }
}

