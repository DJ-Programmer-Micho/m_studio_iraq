<div>
<!-- Insert Modal  -->
<div wire:ignore.self class="modal fade overflow-auto" id="createBranchModal" tabindex="-1" aria-labelledby="createBranchModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl text-white mx-1 mx-lg-auto" style="max-width: 1140px;">
        <div class="modal-content bg-dark">
            <form wire:submit.prevent="addBranch">
                <div class="modal-body">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createBranchModal">{{__('Add Branch')}}</h5>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close"
                            wire:click="closeModal">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    </div>

                    <div class="row mt-5">
                        <h5 class="mb-4"><b>{{__('Initialize Information')}}</b></h5>
                        <div class="d-flex justidy-content-between mb-4 col-12">
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="branchName">{{__('Branch Name:')}}</label>
                                    <input type="text" name="branchName" wire:model="branchName" class="form-control" id="branchName">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="branchManager">{{__('Manager Name:')}}</label>
                                    <input type="text" name="branchManager" wire:model="branchManager" class="form-control" id="branchManager">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" mb-4 col-12">
                        <div class="mb-3">
                            <label for="description">{{__('Description:')}}</label>
                            <div class="col-12">
                                <textarea name="description" id="description"  wire:model="description" rows="10" class="w-100"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary submitJs">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div wire:ignore.self class="modal fade overflow-auto" id="updateBranchModal" tabindex="-1" aria-labelledby="updateBranchModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl text-white mx-1 mx-lg-auto" style="max-width: 1140px;">
        <div class="modal-content bg-dark">
            <form wire:submit.prevent="updateBranch">
                <div class="modal-body">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateBranchModal">{{__('Edit Branch')}}</h5>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close"
                            wire:click="closeModal">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    </div>

                    <div class="row mt-5">
                        <h5 class="mb-4"><b>{{__('Initialize Information')}}</b></h5>
                        <div class="d-flex justidy-content-between mb-4 col-12">
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="branchName">{{__('Branch Name:')}}</label>
                                    <input type="text" name="branchName" wire:model="branchName" class="form-control" id="branchName">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="branchManager">{{__('Manager Name:')}}</label>
                                    <input type="text" name="branchManager" wire:model="branchManager" class="form-control" id="branchManager">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" mb-4 col-12">
                        <div class="mb-3">
                            <label for="description">{{__('Description:')}}</label>
                            <div class="col-12">
                                <textarea name="description" id="description"  wire:model="description" rows="10" class="w-100"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary submitJs">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
<div wire:ignore.self class="modal fade" id="deleteBranchModal" tabindex="-1" aria-labelledby="deleteFoodModalLabel"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog text-white">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteFoodModalLabel">Delete Company</h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <form wire:submit.prevent="destroyBranch">
                <div class="modal-body">
                    <p>{{ __('Are you sure you want to delete this Company?') }}</p>
                    <p>{{ __('Please enter the')}}<strong> "{{$del_branch_name}}" </strong>{{__('to confirm:') }}</p>
                    <input type="text" wire:model="branch_name_to_selete" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger" wire:disabled="!confirmDelete || $foodNameToDelete !== $showTextTemp">
                            {{ __('Yes! Delete') }}
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>


