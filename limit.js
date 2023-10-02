// Get references to the textarea and the word count display
const textarea = document.getElementById('workexp');
const wordCountDisplay = document.getElementById('word-count');

// Define the word limit
const wordLimit = 50;

// Function to update the word count display
function updateWordCount() {
    const words = textarea.value.split(/\s+/).filter(word => word !== '');
    const wordCount = words.length;

    wordCountDisplay.textContent = `Word count: ${wordCount}/${wordLimit}`;

    // Enable or disable input based on the word limit
    if (wordCount >= wordLimit) {
        textInput.setAttribute('readonly', 'readonly');
    } else {
        textInput.removeAttribute('readonly');
    }
}

// Attach an event listener to the textarea to update word count
textarea.addEventListener('input', updateWordCount);

// Initial update of the word count display
updateWordCount();