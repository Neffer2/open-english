<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario:</div>
                <div class="card-body">
                    <form wire:submit.prevent="submit" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" wire:model="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="pais">Pais:</label>
                            <br>
                            {{-- <input type="text" id="pais" wire:model="pais" class="form-control" required> --}}
                            <select name="pais" class="form-control" wire:model="pais" required>
                                <option value="">Selecciona un país ↓</option>
                                @foreach ($paises as $country)
                                    <option value="{{ $country }}" {{ $country == $pais ? 'selected' : '' }}>
                                        {{ $country }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="idioma">Idioma:</label>
                            <select id="idioma" wire:model="idioma" class="form-control" required>
                                <option value="">Selecciona un idioma ↓</option>
                                <option value="Español" {{ $idioma == 'Español' ? 'selected' : '' }}>Español</option>
                                <option value="Inglés" {{ $idioma == 'Inglés' ? 'selected' : '' }}>Inglés</option>
                                <option value="Portugues" {{ $idioma == 'Portugues' ? 'selected' : '' }}>Portugues</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input type="email" id="email" wire:model="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="open_rate">Correo abierto:</label>
                            <input type="checkbox" id="open_rate" wire:model="open_rate" class="form-check-input">
                        </div>
                        <div class="form-group">
                            <label for="click_rate">CTR:</label>
                            <input type="checkbox" id="click_rate" wire:model="click_rate" class="form-check-input">
                        </div>
                        <div class="form-group">
                            <label for="redencion">Redención:</label>
                            <input type="checkbox" id="redencion" wire:model="redencion" class="form-check-input">
                        </div>
                        <button type="submit" class="btn btn-info">Enviar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('formSubmitted', event => {
        alert('Informe agregado correctamente!');
    });
</script>