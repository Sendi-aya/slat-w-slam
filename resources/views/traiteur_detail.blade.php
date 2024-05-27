<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Traiteur Detail</title>
    <style>
        /* Styles pour personnaliser l'apparence */
        .calender {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .calender .text-lg {
            font-weight: 600;
        }

        .calender .text-sm {
            font-size: 0.875rem;
        }

        .calender .grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 0.5rem;
            text-align: center;
        }

        .calender .grid div {
            padding: 0.5rem;
        }

        .calender button {
            background-color: #FBBF24;
            color: #ffffff;
            border: none;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .calender button:hover {
            background-color: #F59E0B;
        }

        .calender .bg-yellow-700 {
            background-color: #FBBF24;
        }

        .calender .text-white {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container mx-auto my-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <!-- Calendrier -->
            <div class="calender p-8">
                <h1 class="text-2xl font-semibold text-yellow-700 mb-2">Prestation complète</h1>
                <p class="mb-4">Consultez nos disponibilités et réservez la date et l'heure qui vous conviennent.</p>
                <div class="grid grid-cols-7 gap-2">
                    <div>lun.</div>
                    <div>mar.</div>
                    <div>mer.</div>
                    <div>jeu.</div>
                    <div>ven.</div>
                    <div>sam.</div>
                    <div>dim.</div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                    <div>7</div><div>1</div>
                    <div>8</div>
                    <div>9</div>
                    <div>10</div>
                    <div>11</div>
                    <div>12</div>
                    <div>13</div><div>1</div>
                    <div>14</div>
                    <div>15</div>
                    <div>16</div>
                    <div>17</div>
                    <div>18</div>
                    <div>19</div><div>1</div>
                    <div>20</div>
                    <div>21</div>
                    <div>22</div>
                    <div>23</div>
                    <div>24</div>
                    <div>25</div>
                    <div>26</div>
                    <div>27</div>
                    <div>28</div>
                    <div>29</div>
                    <div>30</div>
                    
                    <!-- Ajoutez les autres jours ici -->
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div>
                        <p class="text-sm">samedi 25 mai</p>
                        <p class="text-sm text-zinc-500">Aucune disponibilité</p>
                    </div>
                    <button class="bg-yellow-700 text-white py-2 px-4 rounded">Prochaine date disponible</button>
                </div>
            </div>

            <!-- Détails du traiteur -->
            <div class="lg:w-1/3 mt-6 lg:mt-0">
                <h2 class="text-lg font-semibold mb-2">Détails du traiteur</h2>
                <h2 class="text-2xl font-bold mt-4 text-center">{{ $traiteur->nom }}</h2>
                <p class="text-gray-600 mt-2 text-center">Prix: {{ $traiteur->prix }} €</p>
                <button class="bg-zinc-500 text-white py-2 px-4 rounded w-full">Suivant</button>
            </div>
        </div>
    </div>
    <button class="fixed bottom-4 right-4 bg-yellow-700 text-white py-2 px-4 rounded flex items-center">
        <img aria-hidden="true" alt="contact icon" src="https://placehold.co/20x20" class="mr-2" />
        Contactez-nous
    </button>
</body>
</html>
