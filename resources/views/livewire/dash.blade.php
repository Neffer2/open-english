<div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="dash-title">
                <h3 class="m-0">
                    <b>Dashboard {{ $pais }}</b>
                </h3>
            </div>

            <div class="card-body p-4 bg-white rounded">
                <label for="filtrar-email">Filtrar por email:</label>
                <input name="filtrar-email" type="text" placeholder="Buscar Email" class="form-control mb-3"
                    wire:model.debounce.1500ms="search">
                <label for="pais">Filtrar por país:</label>
                <select name="pais" class="form-select" wire:model="pais" wire:change="updateCountry">
                    <option value="Todos">Todos los países</option>
                    @foreach ($paises as $country)
                        <option value="{{ $country }}" {{ $country == $pais ? 'selected' : '' }}>
                            {{ $country }}
                        </option>
                    @endforeach
                </select>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="rounded">
                            <tr>
                                <th>Nombre</th>
                                <th>País</th>
                                <th>Idioma</th>
                                <th>Correo</th>
                                <th>Open Rate</th>
                                <th>CTR</th>
                                <th>Redención</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($informes as $data)
                                <tr>
                                    <td>{{ $data->nombre }}</td>
                                    <td>{{ $data->pais }}</td>
                                    <td>{{ $data->idioma }}</td>
                                    <td>{{ $data->email }}</td>

                                    <td>
                                        @if (Auth::id() == 1)
                                            <select
                                                wire:change="updateField({{ $data->id }}, 'open_rate', $event.target.value)">
                                                <option value="1" {{ $data->open_rate ? 'selected' : '' }}>Si
                                                </option>
                                                <option value="null" {{ $data->open_rate ? '' : 'selected' }}>No
                                                </option>
                                            </select>
                                        @else
                                            {{ $data->open_rate ? 'Si' : 'No' }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (Auth::id() == 1)
                                            <select
                                                wire:change="updateField({{ $data->id }}, 'click_rate', $event.target.value)">
                                                <option value="1" {{ $data->click_rate ? 'selected' : '' }}>Si
                                                </option>
                                                <option value="null" {{ $data->click_rate ? '' : 'selected' }}>No
                                                </option>
                                            </select>
                                        @else
                                            {{ $data->click_rate ? 'Si' : 'No' }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (Auth::id() == 1)
                                            <select
                                                wire:change="updateField({{ $data->id }}, 'redencion', $event.target.value)">
                                                <option value="1" {{ $data->redencion ? 'selected' : '' }}>Si
                                                </option>
                                                <option value="null" {{ $data->redencion ? '' : 'selected' }}>No
                                                </option>
                                            </select>
                                            {{-- Todo Crear funcion para guardar id, field, value 
                                            Crear funcion para actualizar el campo --}}
                                        @else
                                            {{ $data->redencion ? 'Si' : 'No' }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $informes->links('vendor.pagination.bootstrap-4') }}
                    <br>
                    <div class="rates-container">
                        <div class="rates-count">
                            Open Rate: {{ $open_rate_count }}
                            <br>
                            CTR: {{ $click_rate_count }}
                            <br>
                            Redención: {{ $redencion_count }}
                        </div>
                        <button class="btn btn-info" wire:click="applyChanges">Aplicar Cambios</button>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
