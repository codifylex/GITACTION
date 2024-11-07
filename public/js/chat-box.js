
const btnClientMenu = document.getElementById('btn-client-menu');
const clientMenu = document.getElementById('client-menu');
const chatBox = document.getElementById('chat-box');

btnClientMenu.addEventListener('click', function () {
    if (chatBox.classList.contains('w-full')) {
        chatBox.classList.remove('w-full');
        chatBox.classList.add('w-3/5');
        clientMenu.classList.remove('hidden');
    } else {
        chatBox.classList.add('w-full');
        chatBox.classList.remove('w-3/5');
        clientMenu.classList.add('hidden');
    }
});

function handleKeyPress(e) {
    const inputElement = document.getElementById('w-input-text');

    if (e.key === 'Enter' && e.shiftKey) {
        e.preventDefault();
        document.execCommand('insertHTML', false, '<br><br>');
    }

    if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        var body = inputElement.innerHTML;
        Livewire.dispatch('sendMessage', {
            body: body
        });
        inputElement.innerHTML = '';
    }

    adjustHeight(inputElement);
}

function adjustHeight(inputElement) {
    inputElement.style.height = 'auto';

    inputElement.style.height = `${inputElement.scrollHeight}px`;

    if (inputElement.scrollHeight > 100)
        inputElement.style.height = '100px'; // Define uma altura fixa quando atingir o limite

}

function setFocus() {
    const inputElement = document.getElementById('w-input-text');
    inputElement.removeEventListener('keypress', handleKeyPress);
    inputElement.addEventListener('keypress', handleKeyPress);
}
