// Get references to the textarea and the word count display
const textarea = document.getElementById('workexp');
const wordCountDisplay = document.getElementById('word-count');

// Define the word limit
const wordLimit = 50;
wordCountDisplay.textContent = `Word count: 0/${wordLimit}`

textarea.addEventListener('input', () => {
    const text = textarea.value;
    const words = text.trim().split(/\s+/); // Split text by whitespace to count words
    const wordCount = words.length;

    if (wordCount > wordLimit) {
        const truncatedText = words.slice(0, wordLimit).join(' ');
        textarea.value = truncatedText;
        wordCountDisplay.textContent = `Word count: ${wordLimit} (Max Reached)`;
    } else {
        wordCountDisplay.textContent = `Word count: ${wordCount}/${wordLimit}`;
    }
});
