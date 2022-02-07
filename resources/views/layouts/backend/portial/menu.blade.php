<div class="card" data-type="menuItem" data-menu="{{ $menu->id }}">
    <div class="card-header">
        <h4 class="card-header-title">{{ $menu->title }}</h4>
        <button type="button" class="btn btn-sm btn-rounded-circle btn-white mr-2" 
            data-action="edit" data-id="{{ $menu->id }}" data-title="{{ $menu->title }}" 
            data-link="{{ $menu->link }}" data-type="{{ $menu->type }}" data-parent="{{ $menu->parent }}" >
            <span class="fe fe-edit-2"></span>
        </button>
    </div>
</div>