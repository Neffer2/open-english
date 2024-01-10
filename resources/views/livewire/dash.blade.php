<div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="dash-title">
                <h3 class="m-0">
                    <b>Dashboard {{ $pais }}</b>
                </h3>
            </div>
            <div class="card-body p-4 bg-white rounded">
                
                <div class="dropdown-cointainer">
                    <label for="pais">Filtrar por país:</label>
                    <br>
                    <select name="pais" class="dropdown" wire:model="pais" wire:change="updateCountry">
                        <option value="">Todos los países</option>
                        @foreach ($paises as $country)
                            <option value="{{ $country }}" {{ $country == $pais ? 'selected' : '' }}>
                                {{ $country }}
                            </option>
                        @endforeach
                    </select>
                </div>
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
                            <tr>
                                @foreach ($informes as $data)
                            <tr>
                                <td>{{ $data->nombre }}</td>
                                <td>{{ $data->pais }}</td>
                                <td>{{ $data->idioma }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->open_rate ? 'Si' : 'No' }}</td>
                                <td>{{ $data->click_rate ? 'Si' : 'No' }}</td>
                                <td>{{ $data->redencion ? 'Si' : 'No' }}</td>
                            </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        Open Rate: {{ $open_rate_count }}
                        <br>
                        CTR: {{ $click_rate_count }}
                        <br>
                        Redención: {{ $redencion_count }}
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
