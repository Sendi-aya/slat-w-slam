<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Services</title>
    <style>
        /* Vos styles ici */
    </style>
</head>
<body>
    <div class="container mx-auto p-4">
        <div class="button-group flex justify-center space-x-4 mb-4">
            <button onclick="showServices('salles')" class="text-zinc-600 dark:text-zinc-300 border-b-2 border-yellow-600">Salles</button>
            <button onclick="showServices('music')" class="text-zinc-600 dark:text-zinc-300">Musique</button>
            <button onclick="showServices('traiteur')" class="text-zinc-600 dark:text-zinc-300">Traiteur</button>
        </div>

        <div id="salles" class="space-y-4">
            <!-- This section will be populated via JavaScript -->
        </div>

        <div id="music" class="space-y-4" style="display: none;">
            <!-- This section will be populated via JavaScript -->
        </div>

        <div id="traiteur" class="space-y-4" style="display: none;">
            <!-- This section will be populated via JavaScript -->
        </div>

        <div class="contact-button flex items-center space-x-2 bg-yellow-600 text-white px-4 py-2 rounded fixed bottom-4 right-4">
            <img src="https://placehold.co/20x20" alt="Contact Icon" class="rounded-full w-5 h-5">
            <span>Contactez-nous</span>
        </div>
    </div>

    <script>
        window.onload = function() {
            showServices('salles');
        };
    
        function showServices(serviceType) {
            const services = document.querySelectorAll('.space-y-4');
            services.forEach(service => {
                if (service.id === serviceType) {
                    service.style.display = 'block';
                    loadServiceData(serviceType);
                } else {
                    service.style.display = 'none';
                }
            });
        }
    
        function loadServiceData(serviceType) {
            fetch(`/services/${serviceType}`)
                .then(response => response.json())
                .then(data => {
                    const serviceDiv = document.getElementById(serviceType);
    
                    serviceDiv.innerHTML = ''; // Clear previous content
    
                    data.forEach(item => {
                        const serviceItem = document.createElement('div');
                        serviceItem.className = 'service-item flex items-center justify-between';
                        serviceItem.innerHTML = `
                            <div class="flex items-center space-x-4">
                                <img src="{{ url('pictures') }}/${item.image}" alt="${item.nom}" class="rounded-full w-12 h-12">
                                <div>
                                    <h3 class="text-zinc-800 dark:text-zinc-200">${item.nom}</h3>
                                    <p class="text-zinc-500 dark:text-zinc-400">${item.description}</p>
                                    <p class="text-zinc-500 dark:text-zinc-400">Prix: ${item.prix} €</p>
                                </div>
                            </div>`;
    
                        const reservationButton = document.createElement('a');
                        reservationButton.className = 'bg-yellow-600 text-white px-4 py-2 rounded reservation-button';
                        reservationButton.innerText = 'Réserver';
    
                        // Ajoutez le lien avec une URL appropriée en fonction du type de service
                        if (serviceType === 'salles') {
                            reservationButton.href = `/product_detail/${item.id}`;
                        } else if (serviceType === 'music') {
                            reservationButton.href = `/music_detail/${item.id}`;
                        } else if (serviceType === 'traiteur') {
                            reservationButton.href = `/traiteur_detail/${item.id}`;
                        }
    
                        serviceItem.appendChild(reservationButton);
                        serviceDiv.appendChild(serviceItem);
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        }
    </script>
    
    
</body>
</html>
