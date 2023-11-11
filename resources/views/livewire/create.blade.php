<form>
    <input type="hidden" wire:model="category_id">
    <div class="form-group mb-3">
        <label for="categoryName">Name:</label>
        <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" id="categoryName" placeholder="Enter Name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror

        <label for="categoryDescription">Description:</label>
        <textarea type="text" wire:model="description" class="form-control @error('description') is-invalid @enderror" id="categoryDescription" placeholder="Enter Description"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Save</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
    </div>
</form>