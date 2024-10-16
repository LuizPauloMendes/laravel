<div class="app-layout">
    <header>
        <h1>Meu Aplicativo</h1>
    </header>
    <main>
        {{ $slot }}  {{-- O conteúdo do slot será injetado aqui --}}
    </main>
    <footer>
        <p>Rodapé do aplicativo</p>
    </footer>
</div>
