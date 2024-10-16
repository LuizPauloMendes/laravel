<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <style>
        .stars {
            cursor: pointer;
        }
        .star {
            font-size: 2rem;
            color: #ddd;
        }
        .star.selected {
            color: #ffcc00;
        }
        h1, p{
            color:white;
        }
    </style>
</head>
<body>

    <h1>Avalie nosso serviço</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('avaliacao.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Seu nome" required><br><br>
        <div class="stars">
            @for ($i = 1; $i <= 5; $i++)
                <i class="fas fa-star star" data-value="{{ $i }}"></i>
            @endfor
        </div>
        <input type="hidden" name="rating" id="rating" value="">

        <textarea name="comment" placeholder="Deixe um comentário (opcional)" rows="4"></textarea><br><br>

        <button type="submit">Enviar Avaliação</button>
    </form>

    <script>
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('rating');

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                // Definir o valor de rating
                ratingInput.value = star.getAttribute('data-value');

                // Marcar as estrelas como selecionadas
                stars.forEach((s, i) => {
                    s.classList.toggle('selected', i <= index);
                });
            });
        });
    </script>

</body>
</html>
