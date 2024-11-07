<div class="d-flex" style="height: 75vh;">
    <link href="{{ asset('css/chat-service.css') }}" rel="stylesheet" />

    <div class="w-1/6" style="background-color: #e9edef; height:100%; padding: 10px;">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#tab_1" data-bs-toggle="tab">
                    <div class="icon-badge-container">
                        M
                        <div class="icon-badge">6</div>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab_2" data-bs-toggle="tab">
                    <div class="icon-badge-container">
                        2
                        <div class="icon-badge">0</div>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab_3" data-bs-toggle="tab">
                    <div class="icon-badge-container">
                        2
                        <div class="icon-badge">0</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="w-5/6" style="background-color: white; height:100%; padding: 10px;">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab_1">
                <div class="w-full" style="height:10vh">
                    <input class="w-full" type="text" name="search" id="search" placeholder="pesquisar...">
                    
                    <div class="radio-inputs mt-2">
                        <label class="radio">
                            <input wire:click="('all')" type="radio" name="radio" value="all">
                            <span class="name">Todos <span class="pull-right badge bg-green-600"
                                    style="margin-left: 2px"> 0 </span></span>
                        </label>
                        <label class="radio">
                            <input wire:click="('not-read')" type="radio" name="radio">
                            <span class="name">Sem resposta <span class="pull-right badge bg-red-600"
                                    style="margin-left: 2px"> 0 </span></span>
                        </label>
                        <label class="radio">
                            <input wire:click="('finished')" type="radio" name="radio">
                            <span class="name">Concluidos <span class="pull-right badge bg-gray-600"
                                    style="margin-left: 2px"> 0 </span></span>
                        </label>
                        <label class="radio">
                            <input wire:click="('paused')" type="radio" name="radio">
                            <span class="name">Por pausa <span class="pull-right badge bg-gray-600"
                                    style="margin-left: 2px"> 0 </span></span>
                        </label>
                    </div>
                </div>
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                    <li>Item 5</li>
                    <li>Item 6</li>
                    <li>Item 7</li>
                    <li>Item 8</li>
                    <li>Item 9</li>
                    <li>Item 10</li>
                    <li>Item 11</li>
                    <li>Item 12</li>
                    <li>Item 13</li>
                    <li>Item 14</li>
                    <li>Item 15</li>
                    <li>Item 16</li>
   
  
                </ul>
            </div>

            <div class="tab-pane fade" id="tab_2">
                <h4>Menu 2</h4>
            </div>

            <div class="tab-pane fade" id="tab_3">
                <h4>Menu 3</h4>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script>
        // Seleciona todos os links dentro de .nav-link
        const links = document.querySelectorAll('.nav-link');

        // Adiciona o ouvinte de evento de clique a cada link
        links.forEach(link => {
            link.addEventListener('click', function() {
                // Remove a classe 'active' de todos os links
                links.forEach(l => l.classList.remove('active'));

                // Adiciona a classe 'active' ao link clicado
                link.classList.add('active');

                // Adiciona a classe 'active' ao container do ícone associado ao link
                const badgeContainer = link.querySelector('.icon-badge-container');
                badgeContainer.classList.add('active');

                // Remove a classe 'active' dos outros containers
                links.forEach(otherLink => {
                    if (otherLink !== link) {
                        const otherBadgeContainer = otherLink.querySelector('.icon-badge-container');
                        otherBadgeContainer.classList.remove('active');
                    }
                });
            });
        });
    </script>
</div>