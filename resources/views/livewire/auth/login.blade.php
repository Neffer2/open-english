<div class="login">
    <div class="mb-4"> 
        <h2 class="text-center text-oragne mb-0">!No esperes m&aacute;s!</h2>
        <h4 class="text-center">Redime aqu&iacute; tu bono</h4>
    </div>
    <div class="card">
        <div class="card-header text-center">
            <h3 class="m-0">Iniciar Sesi&oacute;n</h3>
        </div>
        <div class="card-body px-4">
            <div class="form-group my-4"> 
                <input id="email" class="form-control login-input" type="email" name="email" wire:model.lazy="email"
                placeholder="Correo eletr&oacute;nico" required autofocus />
                @error('email')
                    <div id="email" class="text-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>    
            <div class="form-group my-4">
                <input id="password" class="form-control login-input" type="password" name="password" wire:model.lazy="pass"
                placeholder="Contraseña" required autocomplete="current-password"/>
                @error('pass')
                    <div id="pass" class="text-invalid">
                        {{ $message }}
                    </div>
                @enderror
            </div>    
        
            <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>