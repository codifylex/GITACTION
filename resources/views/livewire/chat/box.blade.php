<div class="flex">
     <link href="{{ asset('css/chat-box.css') }}" rel="stylesheet" />

     <div id="chat-box" class="w-full" style="background-color: #fcf4ec; height:75vh; position: relative;">
          <div id="btn-client-menu" style="background-color: #e9edef; height:5vh">
          </div>

          <div style="background-color: #e9edef; max-height:200px; position: absolute; bottom: 0; width: 100%;">

               <div style="padding: 10px">
                    <form wire:key="tes" wire:submit.prevent="">
                         <div>
                              <div class="flex" style="display: flex;justify-content:space-between">
                                   <div class="w-5/6 rounded-lg" id="w-input-container" onclick="setFocus()" style="background-color: white;">
                                        <div class="w-input-text-group">
                                             <div id="w-input-text" contenteditable></div>
                                        </div>
                                   </div>
                                   <div class="w-1/6">
                                        <button type="submit" class="w-full bg-green-600 rounded-lg p-2 ml-1 text-white 
        hover:bg-green-700 active:bg-green-800 active:scale-95 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                             Enviar
                                        </button>
                                   </div>

                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>

     <div id="client-menu" class="w-2/5 hidden" style="background-color: white; height:75vh">
          <!-- Conteúdo do menu do cliente -->
     </div>
</div>

<script src="{{ asset('js/chat-box.js') }}" type="text/javascript"></script>
<script>
     const btnClientMenu = document.getElementById('btn-client-menu');
     const clientMenu = document.getElementById('client-menu');
     const chatBox = document.getElementById('chat-box');

     btnClientMenu.addEventListener('click', function() {
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
</script>

<script>
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
</script>