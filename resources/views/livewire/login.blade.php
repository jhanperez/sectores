<div>
    {{-- borras todo y aqui pones el disñeo del login, nunca borres el primer div --}}
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4"> <!-- Ajuste del tamaño del formulario -->
            <div class="card p-4">
              <div class="text-center">
                <h4>Sistema de Sectorización</h4>
                <!-- Logo -->
                <img src="{{ asset('images/logo_institucion.png') }}" alt="Logo" class="img-fluid" style="max-width: 150px; height: auto;">
                
                <p class="text-muted">Inicia sesión para continuar</p>
              </div>
              <!-- Formulario -->
              <form>
                <div class="mb-3">
                  <label for="email" class="form-label">Usuario:</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" id="email" class="form-control" placeholder="user1" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" id="password" class="form-control" placeholder="Contraseña" required>
                  </div>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" id="remember" class="form-check-input">
                  <label for="remember" class="form-check-label">Recuérdame</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
