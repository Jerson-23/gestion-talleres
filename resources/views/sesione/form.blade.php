<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tema" class="form-label">{{ __('Tema') }}</label>
            <input type="text" name="tema" class="form-control @error('tema') is-invalid @enderror" value="{{ old('tema', $sesione?->tema) }}" id="tema" placeholder="Tema">
            {!! $errors->first('tema', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $sesione?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ubicacion" class="form-label">{{ __('Ubicacion') }}</label>
            <input type="text" name="ubicacion" class="form-control @error('ubicacion') is-invalid @enderror" value="{{ old('ubicacion', $sesione?->ubicacion) }}" id="ubicacion" placeholder="Ubicacion">
            {!! $errors->first('ubicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="instructor" class="form-label">{{ __('Instructor') }}</label>
            <input type="text" name="instructor" class="form-control @error('instructor') is-invalid @enderror" value="{{ old('instructor', $sesione?->instructor) }}" id="instructor" placeholder="Instructor">
            {!! $errors->first('instructor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sesionescol" class="form-label">{{ __('Sesionescol') }}</label>
            <input type="text" name="sesionescol" class="form-control @error('sesionescol') is-invalid @enderror" value="{{ old('sesionescol', $sesione?->sesionescol) }}" id="sesionescol" placeholder="Sesionescol">
            {!! $errors->first('sesionescol', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivel_dificultades_id" class="form-label">{{ __('Nivel Dificultades Id') }}</label>
            <input type="text" name="nivel_dificultades_id" class="form-control @error('nivel_dificultades_id') is-invalid @enderror" value="{{ old('nivel_dificultades_id', $sesione?->nivel_dificultades_id) }}" id="nivel_dificultades_id" placeholder="Nivel Dificultades Id">
            {!! $errors->first('nivel_dificultades_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="talleres_id" class="form-label">{{ __('Talleres Id') }}</label>
            <input type="text" name="talleres_id" class="form-control @error('talleres_id') is-invalid @enderror" value="{{ old('talleres_id', $sesione?->talleres_id) }}" id="talleres_id" placeholder="Talleres Id">
            {!! $errors->first('talleres_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>