<form>
    <div class="input-group mb-3">
        <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Buscar.." autocomplete="off">
        <div class="input-group-append">
            <button type="submit" class="btn btn-outline-primary" title="Pesquisar">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
