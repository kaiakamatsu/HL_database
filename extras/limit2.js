// Get references to the textarea and the word count display
const textarea2 = document.getElementById('interest');
const wordCountDisplay2 = document.getElementById('word-count2');

// Define the word limit
const wordLimit2 = 50;
wordCountDisplay2.textContent = `Word count: 0/${wordLimit2}`

textarea2.addEventListener('input', () => {
    const text2 = textarea2.value;
    const words2 = text2.trim().split(/\s+/); // Split text by whitespace to count words
    const wordCount2 = words2.length;

    if (wordCount2 > wordLimit2) {
        const truncatedText2 = words2.slice(0, wordLimit2).join(' ');
        textarea2.value = truncatedText2;
        wordCountDisplay2.textContent = `Word count: ${wordLimit2} (Max Reached)`;
    } else {
        wordCountDisplay2.textContent = `Word count: ${wordCount2}/${wordLimit2}`;
    }
});
