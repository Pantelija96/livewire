<div>
    <form wire:submit.prevent="createPoll">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" wire:model.live="title"/>

        <div class="mb-4">
            <button class="btn" wire:click.prevent="addOption()">Add option</button>
        </div>

        <div class="">
            @foreach($options as $index => $option)
                <div class="mb-4">
                    <div class="mb-4">
                        <label for="option{{$index}}">Option {{$index+1}}</label>
                    </div>
                    <div class="mb-4 flex gap-2">
                        <input type="text" name="option{{$index}}" id="option{{$index}}" wire:model.live="options.{{$index}}" >
                        <button class="btn" wire:click.prevent="removeOption({{$index}})">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn">Submit</button>
    </form>
</div>
