<div>
    <input type="hidden" wire:model="selected_id">
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" wire:model="name" class="form-control input-sm"  placeholder="Name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control input-sm" placeholder="Enter email" wire:model="email">
    </div>
    <button wire:click="back()" class="btn btn-secondary">Back</button>
    <button wire:click="update()" class="btn btn-primary">Update</button>
</div> 
<div class="class="container""></div>